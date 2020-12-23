<?php

namespace App\GP\Domain\Entity;



/**
 * DunningHistoryOrders
 */
class DunningHistoryOrders
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $dunningStepId;

    /**
     * @var bool|null
     */
    private $isSkipped = '0';

    /**
     * @var bool|null
     */
    private $hasError = '0';

    private $dunning;

    private $order;

    private $newStatus;

    /**
     * @var \TCorrespondenceTypes
     *
               *   @ORM\JoinColumn(name="correspondence_type_id", referencedColumnName="id")
     * })
     */
    private $correspondenceType;


}
