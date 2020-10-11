<?php declare(strict_types = 1);

namespace App\Utils\Doctrine\DQL\DateTime;

use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\Parser;
use Prophecy\Argument;
use PHPUnit\Framework\TestCase;
use Doctrine\ORM\Query\AST\Literal;

/**
 * Class ConvertTZTest
 */
class ConvertTZTest extends TestCase
{
    /** @var ConvertTZ */
    private $instance;

    /** @var Parser */
    private $parser;

    /** @var SqlWalker */
    private $sqlWalker;

    /** @var Literal */
    private $literal;

    public function setUp(): void
    {
        $this->instance  = new ConvertTZ('CONVERT_TZ');
        $this->parser    = $this->prophesize(Parser::class);
        $this->sqlWalker = $this->prophesize(SqlWalker::class);
        $this->literal   = $this->prophesize(Literal::class);
    }

    /**
     * @throws \Doctrine\ORM\Query\QueryException
     */
    public function testParse(): void
    {
        $this->parser->match(Argument::any())->shouldBeCalled();
        $this->parser->ArithmeticPrimary()->shouldBeCalled()->willReturn($this->literal->reveal());

        $this->instance->parse($this->parser->reveal());
    }

    /**
     * @throws \Doctrine\ORM\Query\AST\ASTException
     * @throws \Doctrine\ORM\Query\QueryException
     */
    public function testGetSql(): void
    {
        $this->parser->match(Argument::any())->shouldBeCalled();
        $this->parser->ArithmeticPrimary()->shouldBeCalled()->willReturn($this->literal->reveal());

        $this->instance->parse($this->parser->reveal());

        $this->literal->dispatch(Argument::any())->willReturn('created_at', 'Europe/London', "'UTC'");

        $result = $this->instance->getSql($this->sqlWalker->reveal());

        $this->assertSame("created_at AT TIME ZONE Europe/London AT TIME ZONE 'UTC'", $result);
    }
}
