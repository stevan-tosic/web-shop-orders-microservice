<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderLinesOriginal
 *
 * @ORM\Table(name="t_order_lines_original", uniqueConstraints={@ORM\UniqueConstraint(name="IX_t_order_lines_2", columns={"code"})}, indexes={@ORM\Index(name="FK_delivery_option", columns={"delivery_option_id"}), @ORM\Index(name="FK_t_order_lines_t_address", columns={"redeemer_address_id"}), @ORM\Index(name="FK_t_order_lines_t_shipping_status", columns={"shipping_status_id"}), @ORM\Index(name="FK_t_order_lines_t_voucher_status", columns={"voucher_status_id"}), @ORM\Index(name="IX_article_host_date", columns={"article_id", "host_id", "created_at"}), @ORM\Index(name="IX_t_order_lines", columns={"orderID"}), @ORM\Index(name="IX_t_order_lines_1", columns={"productID"}), @ORM\Index(name="main_order_line_id", columns={"main_order_line_id"}), @ORM\Index(name="t_order_lines_source_category_id_FK", columns={"source_category_id"})})
 * @ORM\Entity
 */
class OrderLinesOriginal
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
     * @ORM\Column(name="orderID", type="integer", nullable=true)
     */
    private $orderid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="gpUserID", type="string", length=50, nullable=true)
     */
    private $gpuserid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="productID", type="integer", nullable=true)
     */
    private $productid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="giftbox", type="integer", nullable=true)
     */
    private $giftbox = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="receiver", type="string", length=50, nullable=true)
     */
    private $receiver;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="commission", type="float", precision=10, scale=0, nullable=true)
     */
    private $commission = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="product", type="integer", nullable=true)
     */
    private $product = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="paidDate", type="datetime", nullable=true)
     */
    private $paiddate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="terminationDate", type="datetime", nullable=true)
     */
    private $terminationdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="usageDate", type="datetime", nullable=true)
     */
    private $usagedate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="paymentDate", type="datetime", nullable=true)
     */
    private $paymentdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="deliveryDate", type="datetime", nullable=true)
     */
    private $deliverydate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="referenceProvider", type="text", length=0, nullable=true)
     */
    private $referenceprovider;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_variation_id", type="integer", nullable=true)
     */
    private $productVariationId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true, options={"default"="1"})
     */
    private $quantity = '1';

    /**
     * @var float|null
     *
     * @ORM\Column(name="acquisition_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $acquisitionPrice = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="taxID", type="integer", nullable=true)
     */
    private $taxid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="providerSubID", type="integer", nullable=true)
     */
    private $providersubid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="extend", type="integer", nullable=false)
     */
    private $extend = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="shipping_status_id", type="integer", nullable=true)
     */
    private $shippingStatusId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="voucher_status_id", type="integer", nullable=true)
     */
    private $voucherStatusId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="redeemer_address_id", type="integer", nullable=true)
     */
    private $redeemerAddressId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_id", type="integer", nullable=true)
     */
    private $articleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tracking_code", type="string", length=255, nullable=true)
     */
    private $trackingCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="delivery_option_id", type="integer", nullable=true)
     */
    private $deliveryOptionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="partner_status_id", type="integer", nullable=true)
     */
    private $partnerStatusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="partner_note", type="string", length=255, nullable=true)
     */
    private $partnerNote;

    /**
     * @var int
     *
     * @ORM\Column(name="host_id", type="integer", nullable=false, options={"default"="1"})
     */
    private $hostId = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

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
     * @var int|null
     *
     * @ORM\Column(name="cancellation_status_id", type="integer", nullable=true)
     */
    private $cancellationStatusId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="main_order_line_id", type="integer", nullable=true)
     */
    private $mainOrderLineId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="source_category_id", type="integer", nullable=true)
     */
    private $sourceCategoryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source_category_tree", type="string", length=255, nullable=true)
     */
    private $sourceCategoryTree;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_admin_added", type="boolean", nullable=true)
     */
    private $isAdminAdded = '0';


}
