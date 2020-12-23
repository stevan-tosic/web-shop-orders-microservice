<?php

namespace App\GP\Domain\Entity;



/**
 * OrderLogs
 */
class OrderLogs
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
     * @var string|null
     */
    private $data;

    /**
     * @var string|null
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $when;

    /**
     * @var string
     */
    private $user;

    /**
     * @var bool|null
     */
    private $isTopComment = 'b\'0\'';

    /**
     * @var \DateTime|null
     */
    private $inactiveDate = 'now()';

    private $orderLine;

    /**
     * @var \TDropshippingPartners
     *
               *   @ORM\JoinColumn(name="partner_id", referencedColumnName="ID")
     * })
     */
    private $partner;


}
