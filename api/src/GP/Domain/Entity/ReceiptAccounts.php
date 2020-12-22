<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReceiptAccounts
 *
 * @ORM\Table(name="t_receipt_accounts", uniqueConstraints={@ORM\UniqueConstraint(name="account_number_UNIQUE", columns={"account_number"})})
 * @ORM\Entity
 */
class ReceiptAccounts
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
     * @ORM\Column(name="account_number", type="string", length=13, nullable=false)
     */
    private $accountNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;


}
