<?php
namespace FpDbTest;

require_once (dirname(__FILE__) . "/ExpressionFormatter.php");

use Exception;
use mysqli;
use SQLMod\ExpressionFormatter;

class Database implements DatabaseInterface
{
    private mysqli $mysqli;

    public function __construct(mysqli $mysqli)
    {
        $this->mysqli = $mysqli;
    }

    public function buildQuery(string $query, array $args = []): string
    {
        return ExpressionFormatter::format($query, $this->skip(), $args);
    }

    public function skip()
    {
        return "SKIP_IT";
    }
}
