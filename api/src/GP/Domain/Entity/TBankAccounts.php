<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBankAccounts
 *
 * @ORM\Table(name="t_bank_accounts")
 * @ORM\Entity
 */
class TBankAccounts
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="bank", type="string", length=255, nullable=false)
     */
    private $bank;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=false)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=255, nullable=false)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="account_number", type="string", length=255, nullable=false)
     */
    private $accountNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="reference_number", type="string", length=255, nullable=false)
     */
    private $referenceNumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_bank", type="boolean", nullable=false)
     */
    private $showBank = '0';


}
