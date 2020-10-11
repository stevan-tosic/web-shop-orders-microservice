<?php

namespace App\Tasks\Infrastructure\Persistence\Doctrine\Repository;

use App\Core\Domain\Entity\Host;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\HostRepository;
use App\Tests\TestCase\RepositoryTestCase;

/**
 * Class BaseRepositoryTest
 */
class BaseRepositoryTest extends RepositoryTestCase
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

    public function testPersist()
    {
        $this->em->persist($this->newObjectInstance)->shouldBeCalled();
        static::assertNull($this->newRepositoryInstance->persist($this->newObjectInstance));
    }

    public function testFlush()
    {
        $this->em->flush()->shouldBeCalled();
        static::assertNull($this->newRepositoryInstance->flush());
    }

    public function testSave()
    {
        $this->em->persist($this->newObjectInstance)->shouldBeCalled();
        $this->em->flush()->shouldBeCalled();

        static::assertInstanceOf(
            $this->entityClass,
            $this->newRepositoryInstance->save($this->newObjectInstance)
        );
    }

    public function testRemove()
    {
        $this->em->remove($this->newObjectInstance)->shouldBeCalled();
        $this->em->flush()->shouldBeCalled();

        static::assertNull($this->newRepositoryInstance->remove($this->newObjectInstance));
    }

}
