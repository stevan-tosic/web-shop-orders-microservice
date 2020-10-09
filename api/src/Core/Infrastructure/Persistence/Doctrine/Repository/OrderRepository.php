<?php

namespace App\Core\Infrastructure\Persistence\Doctrine\Repository;

use App\Core\Domain\Entity\Order\Order;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class OrderRepository
 */
class OrderRepository extends BaseRepository
{
    /**
     * OrderRepository constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Order::class);
    }
}
