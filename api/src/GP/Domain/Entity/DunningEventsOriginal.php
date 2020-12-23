<?php

namespace App\GP\Domain\Entity;



/**
 * DunningEventsOriginal
 */
class DunningEventsOriginal
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $orderId;

    /**
     * @var int
     */
    private $stepId;

    /**
     * @var int
     */
    private $billingStatusAffectedId;

    /**
     * @var int
     */
    private $targetBillingStatusId;

    /**
     * @var \DateTime|null
     */
    private $createdAt;


}
