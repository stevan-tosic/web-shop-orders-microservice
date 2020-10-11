<?php

namespace App\Tests\TestCase;

use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;

abstract class RepositoryTestCase extends TestCase
{
    protected $entityClass;

    protected $repositoryClass;

    /** @var $em EntityManager */
    protected $em;

    protected $newObjectInstance;

    protected $newRepositoryInstance;

    /** @var QueryBuilder $queryBuilder */
    protected $queryBuilder;

    /** @var AbstractQuery $query */
    protected $query;

    protected $additionalArgs = [];

    /**
     * setUp
     */
    public function setUp()
    {
        $this->newObjectInstance = new $this->entityClass();

        $this->queryBuilder = $this->prophesize(QueryBuilder::class);
        $this->queryBuilder->select(Argument::any())->willReturn($this->queryBuilder);
        $this->queryBuilder->select(Argument::cetera())->willReturn($this->queryBuilder);
        $this->queryBuilder->innerJoin(
            Argument::any(), Argument::any(), Argument::any(), Argument::any()
        )->willReturn($this->queryBuilder);
        $this->queryBuilder->from(Argument::any(), Argument::any())->willReturn($this->queryBuilder);
        $this->queryBuilder->from(Argument::any(), Argument::any(), Argument::any())->willReturn($this->queryBuilder);
        $this->queryBuilder->orderBy(Argument::any(), Argument::any())->willReturn($this->queryBuilder);
        $this->queryBuilder->where(Argument::any())->willReturn($this->queryBuilder);
        $this->queryBuilder->andWhere(Argument::any())->willReturn($this->queryBuilder);
        $this->queryBuilder->setParameter(Argument::any(), Argument::any())->willReturn($this->queryBuilder);
        $this->queryBuilder->setFirstResult(Argument::any())->willReturn($this->queryBuilder);
        $this->queryBuilder->setMaxResults(Argument::type('integer'))->willReturn($this->queryBuilder);
        $this->queryBuilder->delete(Argument::any())->willReturn($this->queryBuilder);
        $this->queryBuilder->update()->willReturn($this->queryBuilder);
        $this->queryBuilder->update(Argument::cetera())->willReturn($this->queryBuilder);
        $this->queryBuilder->groupBy(Argument::any(), Argument::any())->willReturn($this->queryBuilder);
        $this->queryBuilder->set(Argument::any(), Argument::any())->willReturn($this->queryBuilder);
        $this->queryBuilder->distinct()->willReturn($this->queryBuilder);
        $this->queryBuilder->addSelect(Argument::any())->willReturn($this->queryBuilder);

        $this->query = $this->prophesize(AbstractQuery::class);
        $this->query->execute()->willReturn(null);
        $this->query->getResult()->willReturn(null);
        $this->query->getOneOrNullResult()->willReturn(null);
        $this->query->getResult(Argument::any())->willReturn(null);
        $this->query->getSingleResult()->willReturn(null);
        $this->queryBuilder->getQuery()->willReturn($this->query);

        $em                     = $this->prophesize(EntityManagerInterface::class);
        $this->entityRepository = $this->prophesize(EntityRepository::class);
        $this->entityRepository->createQueryBuilder()->willReturn($this->queryBuilder);
        $this->entityRepository->createQueryBuilder(Argument::any())->willReturn($this->queryBuilder);
        $this->entityRepository->find(Argument::any())->willReturn(null);
        $this->entityRepository->findBy(Argument::cetera())->willReturn(null);
        $this->entityRepository->findAll()->willReturn([]);
        $this->entityRepository->findOneBy(Argument::any())->willReturn(null);
        $em->getRepository(Argument::any())->willReturn($this->entityRepository);
        $em->remove(Argument::any())->willReturn();
        $em->createQueryBuilder()->willReturn($this->queryBuilder);
        $em->persist(Argument::any())->willReturn(Argument::any());
        $em->flush(Argument::any())->willReturn(Argument::any());
        $this->em                    = $em;
        $this->newRepositoryInstance = new $this->repositoryClass($em->reveal(), ...$this->additionalArgs);
    }
}
