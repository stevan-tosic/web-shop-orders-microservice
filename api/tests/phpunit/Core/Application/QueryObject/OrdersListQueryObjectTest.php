<?php

use App\Core\Application\QueryObject\OrdersListQueryObject;
use App\Core\Domain\Entity\Order\Order;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\OrderRepository;
use DG\BypassFinals;
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\Expr;
use Doctrine\ORM\QueryBuilder;
use Prophecy\Argument;
use App\Tests\TestCase\RepositoryTestCase;

/**
 * Class OrdersListQueryObjectTest
 */
class OrdersListQueryObjectTest extends RepositoryTestCase
{
    protected $entityClass = Order::class;

    protected $repositoryClass = OrderRepository::class;

    protected $query;

    /**
     * setUp
     */
    public function setUp()
    {
        parent::setUp();

        BypassFinals::enable();
        $query       = $this->prophesize(Query::class);
        $expr       = $this->prophesize(Expr::class);
        $this->query = $query;

        $queryBuilder = $this->prophesize(QueryBuilder::class);
        $queryBuilder->select(Argument::any())->willReturn($queryBuilder);
        $queryBuilder->from(Argument::any(), Argument::any())->willReturn($queryBuilder);
        $queryBuilder->where(Argument::any())->willReturn($queryBuilder);
        $queryBuilder->andWhere(Argument::any())->willReturn($queryBuilder);
        $queryBuilder->setParameter(Argument::any(), Argument::any())->willReturn($queryBuilder);
        $queryBuilder->leftJoin(Argument::any(), Argument::any(), Argument::any(), Argument::any())->willReturn(
            $queryBuilder
        );
        $queryBuilder->addOrderBy(Argument::any(), Argument::any())->willReturn($queryBuilder);
        $queryBuilder->expr()->willReturn($expr->reveal());

        $this->em->createQueryBuilder()->willReturn($queryBuilder);

        $queryBuilder->getQuery()->willReturn($query->reveal());
    }

    public function testGet()
    {
        $instance = new OrdersListQueryObject($this->em->reveal());
        $params   = [
            'limit'  => 10,
            'page'   => 1,
            'sort'   => 'id',
            'filter' => [
                0 => [
                    'property'   => 'total',
                    'expression' => 'gt',
                    'value'      => '10',
                ],
            ],
        ];

        $result = $instance->get($params);

        $this->assertInstanceOf(Query::class, $this->query->reveal());
    }

}
