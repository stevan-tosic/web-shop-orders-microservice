<?php

namespace App\Tasks\Infrastructure\Persistence\Doctrine\Repository;

use App\Core\Domain\Entity\Order\Order;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\OrderRepository;
use App\Tests\TestCase\RepositoryTestCase;

/**
 * Class OrderRepositoryTest
 */
class OrderRepositoryTest extends RepositoryTestCase
{
    protected $entityClass = Order::class;
    protected $repositoryClass = OrderRepository::class;

    /**
     * setUp
     */
    public function setUp()
    {
        parent::setUp();
    }

    public function testConstructor()
    {
        static::assertInstanceOf($this->repositoryClass, new $this->repositoryClass($this->em->reveal()));
    }
}
