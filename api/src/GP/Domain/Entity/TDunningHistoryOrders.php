<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDunningHistoryOrders
 *
 * @ORM\Table(name="t_dunning_history_orders", indexes={@ORM\Index(name="dunning_history_orders_dunning_Id_idx", columns={"dunning_id"}), @ORM\Index(name="dunning_history_orders_order_id_idx", columns={"order_id"}), @ORM\Index(name="dunning_history_orders_status_id_idx", columns={"new_status_id"}), @ORM\Index(name="t_dunning_history_orders_t_correspondence_types_id_fk", columns={"correspondence_type_id"})})
 * @ORM\Entity
 */
class TDunningHistoryOrders
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
     * @var int|null
     *
     * @ORM\Column(name="dunning_step_id", type="integer", nullable=true)
     */
    private $dunningStepId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_skipped", type="boolean", nullable=true)
     */
    private $isSkipped = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_error", type="boolean", nullable=true)
     */
    private $hasError = '0';

    /**
     * @var \TDunningHistory
     *
     * @ORM\ManyToOne(targetEntity="TDunningHistory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dunning_id", referencedColumnName="id")
     * })
     */
    private $dunning;

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
     * @var \TBillingStatus
     *
     * @ORM\ManyToOne(targetEntity="TBillingStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="new_status_id", referencedColumnName="ID")
     * })
     */
    private $newStatus;

    /**
     * @var \TCorrespondenceTypes
     *
     * @ORM\ManyToOne(targetEntity="TCorrespondenceTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="correspondence_type_id", referencedColumnName="id")
     * })
     */
    private $correspondenceType;


}
