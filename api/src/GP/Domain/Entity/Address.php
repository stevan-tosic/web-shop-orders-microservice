<?php

namespace App\GP\Domain\Entity;



/**
 * Address
 */
class Address
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $titleId;

    /**
     * @var string|null
     */
    private $company;

    /**
     * @var string|null
     */
    private $lastname;

    /**
     * @var string|null
     */
    private $firstname;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $address1;

    /**
     * @var string|null
     */
    private $address2;

    /**
     * @var string|null
     */
    private $zip;

    /**
     * @var string|null
     */
    private $location;

    /**
     * @var int
     */
    private $countryId = '1';

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var \DateTime|null
     */
    private $birthDate;

    /**
     * @var \DateTime|null
     */
    private $registrationDate;

    /**
     * @var string|null
     */
    private $iban;

    /**
     * @var string|null
     */
    private $uid;

    /**
     * @var string|null
     */
    private $poNumber;

    /**
     * @var string|null
     */
    private $costCenter;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var string|null
     */
    private $department;

    private $user;
}
