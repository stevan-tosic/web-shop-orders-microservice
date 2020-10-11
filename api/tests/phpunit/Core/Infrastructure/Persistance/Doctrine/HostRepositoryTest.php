<?php

namespace App\Tasks\Infrastructure\Persistence\Doctrine\Repository;

use App\Core\Domain\Entity\Host;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\HostRepository;
use App\Tests\TestCase\RepositoryTestCase;

/**
 * Class HostRepositoryTest
 */
class HostRepositoryTest extends RepositoryTestCase
{
    protected $entityClass = Host::class;
    protected $repositoryClass = HostRepository::class;

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
