<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartsNew
 *
 * @ORM\Table(name="t_carts_new", uniqueConstraints={@ORM\UniqueConstraint(name="unique_order_number_cart", columns={"order_number"})}, indexes={@ORM\Index(name="OrderNumber", columns={"order_number"}), @ORM\Index(name="t_carts_new_billing_address_id_index", columns={"billing_address_id"}), @ORM\Index(name="t_carts_new_gpUserID_index", columns={"gpUserID"}), @ORM\Index(name="t_carts_new_host_id_index", columns={"host_id"}), @ORM\Index(name="t_carts_new_payment_type_index", columns={"payment_type"}), @ORM\Index(name="t_carts_new_shipping_address_id_index", columns={"shipping_address_id"})})
 * @ORM\Entity
 */
class CartsNew
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="gpUserID", type="string", length=50, nullable=false)
     */
    private $gpuserid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="order_number", type="string", length=32, nullable=true)
     */
    private $orderNumber;

    /**
     * @var int|null
     *
     * @ORM\Column(name="payment_type", type="integer", nullable=true)
     */
    private $paymentType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="customer_care_message", type="text", length=0, nullable=true)
     */
    private $customerCareMessage;

    /**
     * @var float|null
     *
     * @ORM\Column(name="voucher_total", type="float", precision=10, scale=0, nullable=true)
     */
    private $voucherTotal;

    /**
     * @var float|null
     *
     * @ORM\Column(name="exp_shipping_costs", type="float", precision=10, scale=0, nullable=true)
     */
    private $expShippingCosts;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prd_shipping_costs", type="float", precision=10, scale=0, nullable=true)
     */
    private $prdShippingCosts;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=true)
     */
    private $total;

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="credit_worthy", type="boolean", nullable=true)
     */
    private $creditWorthy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="billing_address_id", type="integer", nullable=true)
     */
    private $billingAddressId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="shipping_address_id", type="integer", nullable=true)
     */
    private $shippingAddressId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="host_id", type="integer", nullable=true)
     */
    private $hostId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip_address", type="string", length=250, nullable=true)
     */
    private $ipAddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="browser", type="text", length=0, nullable=true)
     */
    private $browser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="admin_settings", type="text", length=0, nullable=true)
     */
    private $adminSettings;

    /**
     * @var int|null
     *
     * @ORM\Column(name="insurance_desired", type="integer", nullable=true, options={"default"="1"})
     */
    private $insuranceDesired = '1';


}
