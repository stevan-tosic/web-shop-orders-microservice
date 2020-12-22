<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TOrders
 *
 * @ORM\Table(name="t_orders", indexes={@ORM\Index(name="Billing_Address", columns={"billing_address_id"}), @ORM\Index(name="Delivery_Address", columns={"delivery_address_id"}), @ORM\Index(name="FK_t_orders_t_billing_status", columns={"billing_status_id"}), @ORM\Index(name="FK_t_orders_t_users_idx", columns={"user_id"}), @ORM\Index(name="FK_t_orders_type_idx", columns={"type_id"}), @ORM\Index(name="FL_t_orders_t_api_accounts", columns={"api_account_id"}), @ORM\Index(name="t_orders_active", columns={"active"})})
 * @ORM\Entity
 */
class TOrders
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
     * @ORM\Column(name="zahlungsart", type="integer", nullable=true)
     */
    private $zahlungsart = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=0, nullable=true)
     */
    private $comment;

    /**
     * @var float|null
     *
     * @ORM\Column(name="gutschrift", type="float", precision=10, scale=0, nullable=true)
     */
    private $gutschrift = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gpUserID", type="string", length=50, nullable=true)
     */
    private $gpuserid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datatransUppTransactionId", type="string", length=50, nullable=true)
     */
    private $datatransupptransactionid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datatransAuthorizationCode", type="string", length=50, nullable=true)
     */
    private $datatransauthorizationcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datatransResponseMessage", type="string", length=200, nullable=true)
     */
    private $datatransresponsemessage;

    /**
     * @var float|null
     *
     * @ORM\Column(name="datatransAmount", type="float", precision=10, scale=0, nullable=true)
     */
    private $datatransamount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datatransStatus", type="string", length=50, nullable=true)
     */
    private $datatransstatus;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="weight", type="float", precision=10, scale=0, nullable=true)
     */
    private $weight = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="intrum_response", type="integer", nullable=true)
     */
    private $intrumResponse = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dunning_date_1", type="datetime", nullable=true)
     */
    private $dunningDate1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dunning_date_2", type="datetime", nullable=true)
     */
    private $dunningDate2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dunning_date_3", type="datetime", nullable=true)
     */
    private $dunningDate3;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="dunning_off", type="boolean", nullable=true)
     */
    private $dunningOff = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tracking", type="text", length=0, nullable=true)
     */
    private $tracking;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sage_erp", type="datetime", nullable=true)
     */
    private $sageErp;

    /**
     * @var int
     *
     * @ORM\Column(name="correspondence_type_id", type="integer", nullable=false, options={"default"="2"})
     */
    private $correspondenceTypeId = '2';

    /**
     * @var int|null
     *
     * @ORM\Column(name="porto_mwst", type="integer", nullable=true)
     */
    private $portoMwst;

    /**
     * @var int|null
     *
     * @ORM\Column(name="host_id", type="integer", nullable=true)
     */
    private $hostId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_shown", type="integer", nullable=true)
     */
    private $isShown;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mobile", type="integer", nullable=true)
     */
    private $mobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="order_number", type="string", length=32, nullable=true)
     */
    private $orderNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_address", type="string", length=250, nullable=true)
     */
    private $ipAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="browser", type="string", length=500, nullable=true)
     */
    private $browser;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="billing_date", type="datetime", nullable=true)
     */
    private $billingDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dunning_date_4", type="datetime", nullable=true)
     */
    private $dunningDate4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_id", type="string", length=100, nullable=true)
     */
    private $externalId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cancellation_date", type="datetime", nullable=true)
     */
    private $cancellationDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="gtm_sent", type="boolean", nullable=true)
     */
    private $gtmSent = '0';

    /**
     * @var \TOrderTypes
     *
     * @ORM\ManyToOne(targetEntity="TOrderTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;

    /**
     * @var \TAddress
     *
     * @ORM\ManyToOne(targetEntity="TAddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="billing_address_id", referencedColumnName="ID")
     * })
     */
    private $billingAddress;

    /**
     * @var \TAddress
     *
     * @ORM\ManyToOne(targetEntity="TAddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_address_id", referencedColumnName="ID")
     * })
     */
    private $deliveryAddress;

    /**
     * @var \TBillingStatus
     *
     * @ORM\ManyToOne(targetEntity="TBillingStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="billing_status_id", referencedColumnName="ID")
     * })
     */
    private $billingStatus;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \TApiAccounts
     *
     * @ORM\ManyToOne(targetEntity="TApiAccounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="api_account_id", referencedColumnName="id")
     * })
     */
    private $apiAccount;


}
