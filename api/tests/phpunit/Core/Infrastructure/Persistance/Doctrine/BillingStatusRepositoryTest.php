<?php

namespace App\Tasks\Infrastructure\Persistence\Doctrine\Repository;

use App\Core\Domain\Entity\BillingStatus;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\BillingStatusRepository;
use App\Tests\TestCase\RepositoryTestCase;

/**
 * Class BillingStatusRepositoryTest
 */
class BillingStatusRepositoryTest extends RepositoryTestCase
{
    protected $entityClass = BillingStatus::class;
    protected $repositoryClass = BillingStatusRepository::class;

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
