<?php

namespace App\GP\Domain\Entity;



/**
 * ProvidersSubs
 */
class ProvidersSubs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $providerid = '0';

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
    private $phone;

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
     * @var string|null
     */
    private $notes;

    /**
     * @var int|null
     */
    private $billingAddressId;

    /**
     * @var string|null
     */
    private $paymentReference;

    private $address2;


}
