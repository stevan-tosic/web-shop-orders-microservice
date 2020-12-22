<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Receipts
 *
 * @ORM\Table(name="t_receipts", indexes={@ORM\Index(name="fk_receipts_receipt_accounts1_idx", columns={"receipt_account_id"}), @ORM\Index(name="fk_receipts_receipt_type_idx", columns={"receipt_type_id"})})
 * @ORM\Entity
 */
class Receipts
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
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="static_text", type="string", length=64, nullable=true)
     */
    private $staticText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="decorate_action", type="string", length=255, nullable=true)
     */
    private $decorateAction;

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
     * @var \TReceiptTypes
     *
     * @ORM\ManyToOne(targetEntity="TReceiptTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="receipt_type_id", referencedColumnName="id")
     * })
     */
    private $receiptType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TDunningSteps", mappedBy="receipt")
     */
    private $step;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->step = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
