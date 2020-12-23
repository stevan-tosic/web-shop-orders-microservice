<?php

namespace App\GP\Domain\Entity;



/**
 * Providers
 */
class Providers
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $company;

    /**
     * @var string|null
     */
    private $firstname;

    /**
     * @var string|null
     */
    private $lastname;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $zip;

    /**
     * @var string|null
     */
    private $location;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $internet;

    /**
     * @var string|null
     */
    private $bankaccount;

    /**
     * @var string|null
     */
    private $comments;

    /**
     * @var int|null
     */
    private $payment = '0';

    /**
     * @var string|null
     */
    private $login;

    /**
     * @var string|null
     */
    private $password;

    /**
     * @var int|null
     */
    private $viewoption = '0';

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var int|null
     */
    private $validated = '0';

    /**
     * @var int|null
     */
    private $status = '1';

    /**
     * @var string|null
     */
    private $notes;

    /**
     * @var string|null
     */
    private $iban;

    /**
     * @var int|null
     */
    private $billingAddressId;

    /**
     * @var string|null
     */
    private $paymentReference;

    /**
     * @var int|null
     */
    private $providerAccounting;

    /**
     * @var int|null
     */
    private $userId;

    /**
     * @var bool
     */
    private $hidePhone = '0';

    /**
     * @var bool
     */
    private $hideEmail = '0';

    /**
     * @var string|null
     */
    private $redeemExternallyLinkDe;

    /**
     * @var string|null
     */
    private $redeemExternallyLinkFr;

    /**
     * @var string|null
     */
    private $redeemExternallyLinkIt;

    /**
     * @var \TAddress
     *
               *   @ORM\JoinColumn(name="address_id", referencedColumnName="ID")
     * })
     */
    private $address2;


}
