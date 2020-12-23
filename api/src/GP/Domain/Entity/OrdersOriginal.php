<?php

namespace App\GP\Domain\Entity;



/**
 * OrdersOriginal
 */
class OrdersOriginal
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
     * @var int|null
     */
    private $billingStatusId;

    /**
     * @var int|null
     */
    private $billingAddressId;

    /**
     * @var int|null
     */
    private $deliveryAddressId;

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
     * @var int|null
     */
    private $apiAccountId;

    /**
     * @var \DateTime|null
     */
    private $cancellationDate;

    /**
     * @var int|null
     */
    private $userId;

    /**
     * @var int|null
     */
    private $typeId;

    /**
     * @var bool|null
     */
    private $gtmSent = '0';


}
