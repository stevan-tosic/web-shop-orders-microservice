<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TGtmTracking
 *
 * @ORM\Table(name="t_gtm_tracking", indexes={@ORM\Index(name="t_gtm_tracking_t_carts_number_fk", columns={"order_number"}), @ORM\Index(name="t_gtm_tracking_t_orders_ID_fk", columns={"order_id"})})
 * @ORM\Entity
 */
class TGtmTracking
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
     * @var string|null
     *
     * @ORM\Column(name="url", type="string", length=1024, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event", type="string", length=255, nullable=true)
     */
    private $event;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var \TCarts
     *
     * @ORM\ManyToOne(targetEntity="TCarts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_number", referencedColumnName="order_number")
     * })
     */
    private $orderNumber;

    /**
     * @var \TOrders
     *
     * @ORM\ManyToOne(targetEntity="TOrders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_id", referencedColumnName="ID")
     * })
     */
    private $order;


}
