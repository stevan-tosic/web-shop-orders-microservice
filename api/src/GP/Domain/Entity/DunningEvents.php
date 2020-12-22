<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DunningEvents
 *
 * @ORM\Table(name="t_dunning_events", indexes={@ORM\Index(name="billing_status_affected_id", columns={"billing_status_affected_id"}), @ORM\Index(name="order_id", columns={"order_id"}), @ORM\Index(name="step_id", columns={"step_id"}), @ORM\Index(name="target_billing_status_id", columns={"target_billing_status_id"})})
 * @ORM\Entity
 */
class DunningEvents
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \TOrders
     *
     * @ORM\ManyToOne(targetEntity="TOrders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="ID")
     * })
     */
    private $order;

    /**
     * @var \TDunningSteps
     *
     * @ORM\ManyToOne(targetEntity="TDunningSteps")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="step_id", referencedColumnName="id")
     * })
     */
    private $step;

    /**
     * @var \TBillingStatus
     *
     * @ORM\ManyToOne(targetEntity="TBillingStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="billing_status_affected_id", referencedColumnName="ID")
     * })
     */
    private $billingStatusAffected;

    /**
     * @var \TBillingStatus
     *
     * @ORM\ManyToOne(targetEntity="TBillingStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="target_billing_status_id", referencedColumnName="ID")
     * })
     */
    private $targetBillingStatus;


}
