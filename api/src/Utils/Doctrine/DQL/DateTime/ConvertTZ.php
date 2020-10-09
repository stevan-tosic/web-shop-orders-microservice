<?php declare(strict_types = 1);

namespace App\Utils\Doctrine\DQL\DateTime;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\AST\Node;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\Parser;

/**
 * ConvertTZFunction ::= "CONVERT_TZ" "(" ArithmeticPrimary "," ArithmeticPrimary "," ArithmeticPrimary ")"
 */
class ConvertTZ extends FunctionNode
{
    /** @var Node */
    private $value;

    /** @var Node */
    private $fromTzKey;

    /** @var Node */
    private $toTzKey;

    /**
     * @param Parser $parser
     *
     * @throws \Doctrine\ORM\Query\QueryException
     */
    public function parse(Parser $parser): void
    {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);

        $this->value = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);

        $this->fromTzKey = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);

        $this->toTzKey = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    /**
     * @param SqlWalker $sqlWalker
     *
     * @return string
     *
     * @throws \Doctrine\ORM\Query\AST\ASTException
     */
    public function getSql(SqlWalker $sqlWalker): string
    {
        return $this->value->dispatch($sqlWalker).' AT TIME ZONE '.$this->fromTzKey->dispatch($sqlWalker).' AT TIME ZONE '.$this->toTzKey->dispatch($sqlWalker);
    }
}
