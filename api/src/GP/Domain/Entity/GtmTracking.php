<?php

namespace App\GP\Domain\Entity;



/**
 * GtmTracking
 */
class GtmTracking
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $url;

    /**
     * @var string|null
     */
    private $event;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $data;

    private $orderNumber;

    /**
     * @var \TOrders
     *
               *   @ORM\JoinColumn(name="order_id", referencedColumnName="ID")
     * })
     */
    private $order;


}
