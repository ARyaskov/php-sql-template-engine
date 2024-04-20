<?php

namespace SQLMod;


require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../Generated/SQLModLexer.php';
require __DIR__ . '/../Generated/SQLModParser.php';
require __DIR__ . '/../Generated/SQLModVisitor.php';
require __DIR__ . '/../Generated/SQLModBaseVisitor.php';


use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

final class TreeShapeListener implements ParseTreeListener
{
    private int $currentDataIndex = 0;

    private bool $dimOutput = false;

    private bool $useBackQuotes = false;

    private string $result = "";


    public function __construct(private $visitor, private SQLModParser $parser, private $source_template, private $skipLiteral, private $data = [])
    {
    }
    public function visitTerminal(TerminalNode $node): void
    {
        $terminalValue = $node->getText();
        switch ($terminalValue) {
            case "#":
            case "?":
            case "d":
            case "f":
            case "a":
            case "{":
            case "}":
                return;
            default:
                if ($this->dimOutput == false) {
                    if ($terminalValue == "(") {
                        $this->result .= $terminalValue;
                    } elseif ($terminalValue == ")") {
                        $this->result = substr($this->result, 0, -1) . ") ";
                    } else {
                        $this->result .= $terminalValue . " ";
                    }
                }

        }
    }

    public function visitErrorNode(ErrorNode $node): void
    {
        throw new \Exception('SQLModParser: Can not handle token near char №' . $node->getSymbol()->getStartIndex() . "\nContext: " . $this->surround_with_dots($this->source_template, $node->getSymbol()->getStartIndex()));
    }


    public function exitEveryRule(ParserRuleContext $ctx): void
    {
        switch ($ctx->getRuleIndex()) {
            case SQLModParser::RULE_optional_logical_expression:
                $isExcluded = $this->data[$this->currentDataIndex] === $this->skipLiteral;
                if ($isExcluded) {
                    $this->dimOutput = false;
                    $this->currentDataIndex++;
                }
                break;
            case SQLModParser::RULE_updatedElement:
            case SQLModParser::RULE_select_list:
                $this->useBackQuotes = false;
                break;
            default:
        }
    }

    public function enterEveryRule(ParserRuleContext $ctx): void
    {
        $val = $ctx->getText();
        switch ($ctx->getRuleIndex()) {
            case SQLModParser::RULE_directive:
                $this->processDirective($val);
                $this->currentDataIndex++;
                break;
            case SQLModParser::RULE_optional_logical_expression:
                $isExcluded = $this->data[$this->currentDataIndex] === $this->skipLiteral;
                if ($isExcluded) {
                    $this->dimOutput = true;
                }
                break;
            case SQLModParser::RULE_updatedElement:
            case SQLModParser::RULE_select_list:
                $this->useBackQuotes = true;
                break;
            default:
        }
    }

    public function result(): string
    {
        return $this->result;
    }

    private function surround_with_dots(string $text, int $position): string
    {
        $length = strlen($text);
        $paddingLength = 15;
        $padding = "...";

        if ($length <= $position) {
            return $text;
        }

        $text = substr_replace($text, "⚠️", $position, 0);
        $start = max(0, $position - $paddingLength);
        $end = min($length, $position + $paddingLength);

        $surroundedText = $padding . substr($text, $start, $end - $start) . $padding;

        return $surroundedText;
    }

    private function convert_respect_type(mixed $value): string
    {
        $result = "";
        $type = gettype($value);
        switch ($type) {
            case "string":
                if ($this->useBackQuotes) {
                    $result = "`{$value}`";
                } else {
                    $result = "'{$value}'";
                }
                break;
        }

        return $result;
    }

    private function typeFormat(mixed $v, bool $useSingleQuotes = false): string
    {
        $elementType = gettype($v);

        return match ($elementType) {
            'integer' => strval($v),
            'string' => $useSingleQuotes ? "'{$v}'" : ($this->useBackQuotes ? "`{$v}`" : "'{$v}'"),
            'NULL' => "NULL"
        };
    }

    private function processDirective(string $directive): void
    {
        $val = $this->data[$this->currentDataIndex];
        switch ($directive) {
            case "?":
                if (strval($val) == "null") {
                    $result = "NULL";
                } else {
                    $result = $this->convert_respect_type($val);
                }
                break;
            case "?d":
                if (strval($val) == "null") {
                    $result = "NULL";
                } else {
                    $result = intval(strval($val));
                }
                break;
            case "?f":
                if (strval($val) == "null") {
                    $result = "NULL";
                } else {
                    $result = floatval(strval($val));
                }
                break;
            case "?a":
                if (array_values($val) !== $val) {
                    // Associative array
                    $result = "";
                    foreach ($val as $key => $value) {
                        $result .= "`$key` = {$this->typeFormat($value, true)}";
                        $result .= ", ";
                    }
                    $result = substr($result, 0, -strlen(", "));
                } else {
                    // Regular array
                    $result = implode(", ", array_map([$this, "typeFormat"], $val));
                }
                break;
            case "?#":
                if (is_array($val)) {
                    $result = implode(", ", array_map([$this, "typeFormat"], $val));
                } elseif (is_string($val)) {
                    $result = "`$val`";
                } else {
                    echo "Nor array, nor string";
                }
                break;
            default:

        }

        if (!$this->dimOutput) {
            $this->result .= $result . " ";
        }
    }
}


final class ExpressionFormatter
{
    public static function format(string $template, string $skipLiteral, array $args = []): string
    {
        $stream = InputStream::fromString($template);
        $lexer = new SQLModLexer($stream);
        $tokens = new CommonTokenStream($lexer);
        $parser = new SQLModParser($tokens);
        $parser->addErrorListener(new DiagnosticErrorListener());
        $parser->setBuildParseTree(true);
        $tree = $parser->sql_statement();
        $visitor = new SQLModBaseVisitor();
        $templator = new TreeShapeListener($visitor, $parser, $template, $skipLiteral, $args);
        ParseTreeWalker::default()->walk($templator, $tree);
        return trim($templator->result());
    }
}

?>