<?php

namespace App\Core\Domain\Repository;

use Doctrine\Persistence\ObjectRepository;

/**
 * Interface ExtendedRepositoryInterface
 */
interface ExtendedRepositoryInterface extends BaseRepositoryInterface
{

    /**
     * @param $object
     *
     * @return mixed
     */
    public function save($object);

    /**
     * @param $object
     *
     * @return mixed
     */
    public function persist($object);

    /** @return void */
    public function flush();

    /** @return ObjectRepository */
    public function getRepository();
}
