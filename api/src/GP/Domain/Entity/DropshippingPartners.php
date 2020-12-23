<?php

namespace App\GP\Domain\Entity;



/**
 * DropshippingPartners
 */
class DropshippingPartners
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var bool|null
     */
    private $canPrintBill;

    /**
     * @var bool|null
     */
    private $sendNotificationEmails;

    /**
     * @var string|null
     */
    private $notificationEmailAddress;

    /**
     * @var string|null
     */
    private $mailNotificationSubject;

    /**
     * @var string|null
     */
    private $orderTemplate = 'default';

    /**
     * @var string|null
     */
    private $slipTemplate = 'gp_with_logo_address_left';

    /**
     * @var bool
     */
    private $requiredTrackingNumber = 'b\'1\'';

    private $address;

    private $user;

    private $schedule;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
        $this->schedule = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
