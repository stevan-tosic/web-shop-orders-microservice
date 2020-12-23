<?php

namespace App\GP\Domain\Entity;



/**
 * DunningEvents
 */
class DunningEvents
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    private $order;

    /**
     * @var \TDunningSteps
     *
               *   @ORM\JoinColumn(name="step_id", referencedColumnName="id")
     * })
     */
    private $step;

    private $billingStatusAffected;

    /**
     * @var \TBillingStatus
     *
               *   @ORM\JoinColumn(name="target_billing_status_id", referencedColumnName="ID")
     * })
     */
    private $targetBillingStatus;


}
