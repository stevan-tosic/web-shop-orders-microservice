<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReceiptDetails
 *
 * @ORM\Table(name="t_receipt_details", indexes={@ORM\Index(name="fk_receipt_details_receipt_accounts1_idx", columns={"receipt_account_id"}), @ORM\Index(name="fk_receipt_details_t_taxes1_idx", columns={"tax_id"}), @ORM\Index(name="fk_t_receipt_details_t_receipts1_idx", columns={"receipt_id"})})
 * @ORM\Entity
 */
class ReceiptDetails
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
     * @var bool
     *
     * @ORM\Column(name="is_using_order_tax", type="boolean", nullable=false)
     */
    private $isUsingOrderTax = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_negative_amount", type="boolean", nullable=false)
     */
    private $isNegativeAmount = '0';

    /**
     * @var \TReceiptAccounts
     *
     * @ORM\ManyToOne(targetEntity="TReceiptAccounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="receipt_account_id", referencedColumnName="id")
     * })
     */
    private $receiptAccount;

    /**
     * @var \TTaxes
     *
     * @ORM\ManyToOne(targetEntity="TTaxes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tax_id", referencedColumnName="ID")
     * })
     */
    private $tax;

    /**
     * @var \TReceipts
     *
     * @ORM\ManyToOne(targetEntity="TReceipts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="receipt_id", referencedColumnName="id")
     * })
     */
    private $receipt;


}
