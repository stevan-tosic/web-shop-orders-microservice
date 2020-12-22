<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDunningEventsOriginal
 *
 * @ORM\Table(name="t_dunning_events_original", indexes={@ORM\Index(name="billing_status_affected_id", columns={"billing_status_affected_id"}), @ORM\Index(name="order_id", columns={"order_id"}), @ORM\Index(name="step_id", columns={"step_id"}), @ORM\Index(name="target_billing_status_id", columns={"target_billing_status_id"})})
 * @ORM\Entity
 */
class TDunningEventsOriginal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="step_id", type="integer", nullable=false)
     */
    private $stepId;

    /**
     * @var int
     *
     * @ORM\Column(name="billing_status_affected_id", type="integer", nullable=false)
     */
    private $billingStatusAffectedId;

    /**
     * @var int
     *
     * @ORM\Column(name="target_billing_status_id", type="integer", nullable=false)
     */
    private $targetBillingStatusId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;


}
