<?php

namespace App\GP\Domain\Entity;



/**
 * PaymentSettings
 */
class PaymentSettings
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string|null
     */
    private $link;

    /**
     * @var bool|null
     */
    private $activeFooter = '0';

    private $language;

    /**
     * @var \TPayment
     *
               *   @ORM\JoinColumn(name="payment_id", referencedColumnName="ID")
     * })
     */
    private $payment;


}
