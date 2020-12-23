<?php

namespace App\GP\Domain\Entity;



/**
 * Distributors
 */
class Distributors
{
    /**
     * @var int
     */
    private $id;

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
    private $city;

    /**
     * @var int|null
     */
    private $country = '0';

    /**
     * @var string|null
     */
    private $company;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $firstname;

    /**
     * @var string|null
     */
    private $homepage;

    /**
     * @var string|null
     */
    private $lastname;

    /**
     * @var string|null
     */
    private $notes;

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var int|null
     */
    private $title = '0';

    /**
     * @var string|null
     */
    private $zip;

    /**
     * @var string|null
     */
    private $importCostsShare;

    private $address;

    private $currency;

    private $responsiblePerson;


}
