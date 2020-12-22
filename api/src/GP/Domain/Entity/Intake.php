<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intake
 *
 * @ORM\Table(name="t_intake", indexes={@ORM\Index(name="IX_t_intake_distributor_id", columns={"distributor_id"})})
 * @ORM\Entity
 */
class Intake
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distributor_id", type="integer", nullable=true)
     */
    private $distributorId = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="modified_date", type="datetime", nullable=true)
     */
    private $modifiedDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="order_date", type="datetime", nullable=true)
     */
    private $orderDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="shipment_tracking", type="string", length=50, nullable=true)
     */
    private $shipmentTracking;

    /**
     * @var float|null
     *
     * @ORM\Column(name="shipment_weight", type="float", precision=10, scale=0, nullable=true)
     */
    private $shipmentWeight = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=0, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="shipment_date", type="datetime", nullable=true)
     */
    private $shipmentDate;


}
