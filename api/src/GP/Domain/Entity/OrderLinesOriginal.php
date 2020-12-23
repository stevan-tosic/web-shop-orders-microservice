<?php

namespace App\GP\Domain\Entity;



/**
 * OrderLinesOriginal
 */
class OrderLinesOriginal
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $orderid = '0';

    /**
     * @var string|null
     */
    private $gpuserid;

    /**
     * @var int|null
     */
    private $productid = '0';

    /**
     * @var int|null
     */
    private $giftbox = '0';

    /**
     * @var string|null
     */
    private $receiver;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var float|null
     */
    private $price = '0';

    /**
     * @var float|null
     */
    private $commission = '0';

    /**
     * @var int|null
     */
    private $product = '0';

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $paiddate;

    /**
     * @var \DateTime|null
     */
    private $terminationdate;

    /**
     * @var \DateTime|null
     */
    private $usagedate;

    /**
     * @var \DateTime|null
     */
    private $paymentdate;

    /**
     * @var \DateTime|null
     */
    private $deliverydate;

    /**
     * @var string|null
     */
    private $referenceprovider;

    /**
     * @var int|null
     */
    private $productVariationId = '0';

    /**
     * @var int|null
     */
    private $quantity = '1';

    /**
     * @var float|null
     */
    private $acquisitionPrice = '0';

    /**
     * @var int|null
     */
    private $taxid = '0';

    /**
     * @var int|null
     */
    private $providersubid = '0';

    /**
     * @var int
     */
    private $extend = '0';

    /**
     * @var int|null
     */
    private $shippingStatusId;

    /**
     * @var int|null
     */
    private $voucherStatusId;

    /**
     * @var int|null
     */
    private $redeemerAddressId;

    /**
     * @var int|null
     */
    private $articleId;

    /**
     * @var string|null
     */
    private $trackingCode;

    /**
     * @var int|null
     */
    private $deliveryOptionId;

    /**
     * @var int|null
     */
    private $partnerStatusId;

    /**
     * @var string|null
     */
    private $partnerNote;

    /**
     * @var int
     */
    private $hostId = '1';

    /**
     * @var bool
     */
    private $active = true;

    /**
     * @var string|null
     */
    private $externalId;

    /**
     * @var \DateTime|null
     */
    private $cancellationDate;

    /**
     * @var int|null
     */
    private $cancellationStatusId;

    /**
     * @var int|null
     */
    private $mainOrderLineId;

    /**
     * @var int|null
     */
    private $sourceCategoryId;

    /**
     * @var string|null
     */
    private $sourceCategoryTree;

    /**
     * @var bool|null
     */
    private $isAdminAdded = '0';


}
