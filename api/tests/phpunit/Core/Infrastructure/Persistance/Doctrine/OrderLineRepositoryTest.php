<?php

namespace App\Tasks\Infrastructure\Persistence\Doctrine\Repository;

use App\Core\Domain\Entity\Order\OrderLine;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\OrderLineRepository;
use App\Tests\TestCase\RepositoryTestCase;

/**
 * Class OrderLineRepositoryTest
 */
class OrderLineRepositoryTest extends RepositoryTestCase
{
    protected $entityClass = OrderLine::class;
    protected $repositoryClass = OrderLineRepository::class;

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
