<?php

namespace App\Core\Infrastructure\Persistence\Doctrine\Repository;

use App\Core\Domain\Repository\ExtendedRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;

/**
 * Class BaseRepository
 */
class BaseRepository implements ExtendedRepositoryInterface
{
    /** @var ObjectRepository */
    private $repository;

    /** @var EntityManagerInterface */
    private $entityManager;

    /**
     * BaseRepository constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param string                 $class
     */
    public function __construct(EntityManagerInterface $entityManager, $class)
    {
        $this->repository    = $entityManager->getRepository($class);
        $this->entityManager = $entityManager;
    }

    /**
     * @param object $entity
     */
    public function persist($entity)
    {
        $this->entityManager->persist($entity);
    }

    /**
     * @return void
     */
    public function flush()
    {
        $this->entityManager->flush();
    }

    /**
     * @param array $criteria
     *
     * @return object
     */
    public function findOneBy(array $criteria)
    {
        return $this->repository->findOneBy($criteria);
    }

    /**
     * @return object[]
     */
    public function findAll()
    {
        return $this->repository->findAll();
    }

    /**
     * @param object $entity
     *
     * @return object
     */
    public function save($entity)
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();

        return $entity;
    }

    /**
     * @param object $entity
     *
     * @return void
     */
    public function remove($entity)
    {
        $this->entityManager->remove($entity);
        $this->entityManager->flush();
    }

    /**
     * @return ObjectRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function findById($id)
    {
        return $this->repository->find($id);
    }
}
