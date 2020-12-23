<?php

namespace App\GP\Domain\Entity;



/**
 * Intake
 */
class Intake
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $distributorId = '0';

    /**
     * @var \DateTime|null
     */
    private $modifiedDate;

    /**
     * @var \DateTime|null
     */
    private $orderDate;

    /**
     * @var string|null
     */
    private $shipmentTracking;

    /**
     * @var float|null
     */
    private $shipmentWeight = '0';

    /**
     * @var string|null
     */
    private $comment;

    /**
     * @var \DateTime|null
     */
    private $shipmentDate;


}
