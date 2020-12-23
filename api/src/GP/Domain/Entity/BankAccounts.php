<?php

namespace App\GP\Domain\Entity;



/**
 * BankAccounts
 */
class BankAccounts
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $bank;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $zip;

    /**
     * @var string
     */
    private $accountNumber;

    /**
     * @var string
     */
    private $referenceNumber;

    /**
     * @var bool
     */
    private $showBank = '0';


}
