<?php

namespace App\GP\Domain\Entity;



/**
 * OrderLines
 */
class OrderLines
{
    /**
     * @var int
     */
    private $id;

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
    private $articleId;

    /**
     * @var string|null
     */
    private $trackingCode;

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
     * @var string|null
     */
    private $sourceCategoryTree;

    /**
     * @var bool|null
     */
    private $isAdminAdded = '0';

    /**
     * @var float
     */
    private $originalPrice = '0';

    /**
     * @var bool
     */
    private $isStandaloneCheckoutArticle = '0';

    /**
     * @var \TDeliveryOptions
     *
               *   @ORM\JoinColumn(name="delivery_option_id", referencedColumnName="id")
     * })
     */
    private $deliveryOption;

    /**
     * @var \TOrderLines
     *
               *   @ORM\JoinColumn(name="main_order_line_id", referencedColumnName="ID")
     * })
     */
    private $mainOrderLine;

    /**
     * @var \TOrderLines
     *
               *   @ORM\JoinColumn(name="checkout_article_parent_line_id", referencedColumnName="ID")
     * })
     */
    private $checkoutArticleParentLine;

    /**
     * @var \TCheckoutGroups
     *
               *   @ORM\JoinColumn(name="checkout_group_id", referencedColumnName="id")
     * })
     */
    private $checkoutGroup;

    /**
     * @var \TAddress
     *
               *   @ORM\JoinColumn(name="redeemer_address_id", referencedColumnName="ID")
     * })
     */
    private $redeemerAddress;

    /**
     * @var \TShippingStatus
     *
               *   @ORM\JoinColumn(name="shipping_status_id", referencedColumnName="ID")
     * })
     */
    private $shippingStatus;

    /**
     * @var \TVoucherStatus
     *
               *   @ORM\JoinColumn(name="voucher_status_id", referencedColumnName="ID")
     * })
     */
    private $voucherStatus;

    /**
     * @var \TCategoriesNew
     *
               *   @ORM\JoinColumn(name="source_category_id", referencedColumnName="id")
     * })
     */
    private $sourceCategory;

    /**
     * @var \TDropshippingPartners
     *
               *   @ORM\JoinColumn(name="dropshipper_id", referencedColumnName="ID")
     * })
     */
    private $dropshipper;

    /**
     * @var \TOrders
     *
               *   @ORM\JoinColumn(name="orderID", referencedColumnName="ID")
     * })
     */
    private $orderid;


}
