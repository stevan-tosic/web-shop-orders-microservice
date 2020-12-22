<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDropshippingPartners
 *
 * @ORM\Table(name="t_dropshipping_partners", indexes={@ORM\Index(name="FK__t_dropshi__addre__6E2C3FB6", columns={"address_id"})})
 * @ORM\Entity
 */
class TDropshippingPartners
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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="can_print_bill", type="boolean", nullable=true)
     */
    private $canPrintBill;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="send_notification_emails", type="boolean", nullable=true)
     */
    private $sendNotificationEmails;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notification_email_address", type="string", length=255, nullable=true)
     */
    private $notificationEmailAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_notification_subject", type="string", length=255, nullable=true)
     */
    private $mailNotificationSubject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="order_template", type="string", length=255, nullable=true, options={"default"="default"})
     */
    private $orderTemplate = 'default';

    /**
     * @var string|null
     *
     * @ORM\Column(name="slip_template", type="string", length=255, nullable=true, options={"default"="gp_with_logo_address_left"})
     */
    private $slipTemplate = 'gp_with_logo_address_left';

    /**
     * @var bool
     *
     * @ORM\Column(name="required_tracking_number", type="boolean", nullable=false, options={"default"="b'1'"})
     */
    private $requiredTrackingNumber = 'b\'1\'';

    /**
     * @var \TAddress
     *
     * @ORM\ManyToOne(targetEntity="TAddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="ID")
     * })
     */
    private $address;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TUsers", mappedBy="partner")
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TOnsitePromotionSchedules", mappedBy="dropshipper")
     */
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
