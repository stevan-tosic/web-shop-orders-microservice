<?php

namespace App\GP\Domain\Entity;



/**
 * Carts
 */
class Carts
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $gpuserid;

    /**
     * @var string|null
     */
    private $orderNumber;

    /**
     * @var int|null
     */
    private $paymentType;

    /**
     * @var string|null
     */
    private $customerCareMessage;

    /**
     * @var float|null
     */
    private $voucherTotal;

    /**
     * @var float|null
     */
    private $expShippingCosts;

    /**
     * @var float|null
     */
    private $prdShippingCosts;

    /**
     * @var float|null
     */
    private $total;

    /**
     * @var int|null
     */
    private $active;

    /**
     * @var bool|null
     */
    private $locked = '0';

    /**
     * @var \DateTime|null
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var bool|null
     */
    private $creditWorthy;

    /**
     * @var int|null
     */
    private $billingAddressId;

    /**
     * @var int|null
     */
    private $shippingAddressId;

    /**
     * @var int|null
     */
    private $hostId;

    /**
     * @var string|null
     */
    private $ipAddress;

    /**
     * @var string|null
     */
    private $browser;

    /**
     * @var bool|null
     */
    private $mobile = '0';

    /**
     * @var string|null
     */
    private $adminSettings;

    /**
     * @var int|null
     */
    private $insuranceDesired = '1';


}
