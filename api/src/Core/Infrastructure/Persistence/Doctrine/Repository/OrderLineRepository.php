<?php

namespace App\Core\Infrastructure\Persistence\Doctrine\Repository;

use App\Core\Domain\Entity\Order\OrderLine;
use Doctrine\ORM\EntityManagerInterface;

/**
 * Class OrderLineRepository
 */
class OrderLineRepository extends BaseRepository
{
    /**
     * OrderLineRepository constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, OrderLine::class);
    }
}
