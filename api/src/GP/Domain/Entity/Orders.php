<?php

namespace App\GP\Domain\Entity;



/**
 * Orders
 */
class Orders
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $zahlungsart = '0';

    /**
     * @var string|null
     */
    private $comment;

    /**
     * @var float|null
     */
    private $gutschrift = '0';

    /**
     * @var float|null
     */
    private $total = '0';

    /**
     * @var string|null
     */
    private $gpuserid;

    /**
     * @var string|null
     */
    private $datatransupptransactionid;

    /**
     * @var string|null
     */
    private $datatransauthorizationcode;

    /**
     * @var string|null
     */
    private $datatransresponsemessage;

    /**
     * @var float|null
     */
    private $datatransamount;

    /**
     * @var string|null
     */
    private $datatransstatus;

    /**
     * @var bool|null
     */
    private $active = '0';

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var float|null
     */
    private $weight = '0';

    /**
     * @var int|null
     */
    private $intrumResponse = '0';

    /**
     * @var \DateTime|null
     */
    private $dunningDate1;

    /**
     * @var \DateTime|null
     */
    private $dunningDate2;

    /**
     * @var \DateTime|null
     */
    private $dunningDate3;

    /**
     * @var bool|null
     */
    private $dunningOff = '0';

    /**
     * @var string|null
     */
    private $tracking;

    /**
     * @var \DateTime|null
     */
    private $sageErp;

    /**
     * @var int
     */
    private $correspondenceTypeId = '2';

    /**
     * @var int|null
     */
    private $portoMwst;

    /**
     * @var int|null
     */
    private $hostId;

    /**
     * @var int|null
     */
    private $isShown;

    /**
     * @var int|null
     */
    private $mobile;

    /**
     * @var string|null
     */
    private $orderNumber;

    /**
     * @var string|null
     */
    private $ipAddress;

    /**
     * @var string|null
     */
    private $browser;

    /**
     * @var \DateTime|null
     */
    private $billingDate;

    /**
     * @var \DateTime|null
     */
    private $dunningDate4;

    /**
     * @var string|null
     */
    private $externalId;

    /**
     * @var \DateTime|null
     */
    private $cancellationDate;

    /**
     * @var bool|null
     */
    private $gtmSent = '0';

    private $type;

    /**
     * @var \TAddress
     *
               *   @ORM\JoinColumn(name="billing_address_id", referencedColumnName="ID")
     * })
     */
    private $billingAddress;

    private $deliveryAddress;

    /**
     * @var \TBillingStatus
     *
               *   @ORM\JoinColumn(name="billing_status_id", referencedColumnName="ID")
     * })
     */
    private $billingStatus;

    private $user;

    /**
     * @var \TApiAccounts
     *
               *   @ORM\JoinColumn(name="api_account_id", referencedColumnName="id")
     * })
     */
    private $apiAccount;


}
