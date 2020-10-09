<?php

namespace App\Core\Infrastructure\Persistence\Doctrine\Repository;

use App\Core\Domain\Entity\Address;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class AddressRepository
 */
class AddressRepository extends BaseRepository
{
    /**
     * AddressRepository constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Address::class);
    }
}
