<?php

namespace App\Core\Infrastructure\Persistence\Doctrine\Repository;

use App\Core\Domain\Entity\BillingStatus;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class HostRepository
 */
class BillingStatusRepository extends BaseRepository
{
    /**
     * HostRepository constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, BillingStatus::class);
    }
}
