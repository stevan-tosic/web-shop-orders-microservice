<?php

namespace App\GP\Domain\Entity;



/**
 * ReceiptDetails
 */
class ReceiptDetails
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $isUsingOrderTax = '0';

    /**
     * @var bool
     */
    private $isNegativeAmount = '0';

    /**
     * @var \TReceiptAccounts
     *
               *   @ORM\JoinColumn(name="receipt_account_id", referencedColumnName="id")
     * })
     */
    private $receiptAccount;

    /**
     * @var \TTaxes
     *
               *   @ORM\JoinColumn(name="tax_id", referencedColumnName="ID")
     * })
     */
    private $tax;

    /**
     * @var \TReceipts
     *
               *   @ORM\JoinColumn(name="receipt_id", referencedColumnName="id")
     * })
     */
    private $receipt;


}
