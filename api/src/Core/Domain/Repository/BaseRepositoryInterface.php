<?php declare(strict_types = 1);

namespace App\Core\Domain\Repository;

/**
 * Interface BaseRepositoryInterface
 */
interface BaseRepositoryInterface
{
    /**
     * @param int $id
     *
     * @return mixed
     */
    public function findById(int $id);

    /**
     * Find all method
     *
     * @return mixed
     */
    public function findAll();

    /**
     * @param array $criteria
     *
     * @return mixed
     */
    public function findOneBy(array $criteria);
}
