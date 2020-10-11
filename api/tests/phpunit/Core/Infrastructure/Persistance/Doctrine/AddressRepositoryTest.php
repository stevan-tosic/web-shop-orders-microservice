<?php

namespace App\Tasks\Infrastructure\Persistence\Doctrine\Repository;

use App\Core\Domain\Entity\Address;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\AddressRepository;
use App\Tests\TestCase\RepositoryTestCase;

/**
 * Class AddressRepositoryTest
 */
class AddressRepositoryTest extends RepositoryTestCase
{
    protected $entityClass = Address::class;
    protected $repositoryClass = AddressRepository::class;

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
