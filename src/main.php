<?php

namespace SQLMod;


require __DIR__.'/../vendor/autoload.php';
require __DIR__.'/../Generated/SQLModLexer.php';
require __DIR__.'/../Generated/SQLModParser.php';
require __DIR__.'/../Generated/SQLModVisitor.php';
require __DIR__.'/../Generated/SQLModBaseVisitor.php';


use Antlr\Antlr4\Runtime\CommonTokenStream;
use Antlr\Antlr4\Runtime\Error\Listeners\DiagnosticErrorListener;
use Antlr\Antlr4\Runtime\InputStream;
use Antlr\Antlr4\Runtime\ParserRuleContext;
use Antlr\Antlr4\Runtime\Tree\ErrorNode;
use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
use Antlr\Antlr4\Runtime\Tree\ParseTreeWalker;
use Antlr\Antlr4\Runtime\Tree\TerminalNode;

final class TreeShapeListener implements ParseTreeListener {
    public function visitTerminal(TerminalNode $node) : void {
        echo 'visit terminal: ' . $node;
    }
    public function visitErrorNode(ErrorNode $node) : void {}
    public function exitEveryRule(ParserRuleContext $ctx) : void {}

    public function enterEveryRule(ParserRuleContext $ctx) : void {
        echo ' && '. $ctx->getText();
    }
}

final class SQLModVisitorImpl extends SQLModBaseVisitor {
    private $text = "";

    public function visitTerminal(TerminalNode $node): mixed  {
        $this->text .= $node->getSymbol()->getText();
        echo $this->text;
        
        return null;
    }   
}


$input = "SELECT name FROM users WHERE id IN (1, 2, 3)";

$stream = InputStream::fromString($input);
$lexer = new SQLModLexer($stream);
$tokens = new CommonTokenStream($lexer);
$parser = new SQLModParser($tokens);
$parser->addErrorListener(new DiagnosticErrorListener());
$parser->setBuildParseTree(true);
$tree = $parser->sql_statement();

ParseTreeWalker::default()->walk(new TreeShapeListener(), $tree);


?>