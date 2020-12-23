<?php

namespace App\GP\Domain\Entity;



/**
 * Receipts
 */
class Receipts
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $staticText;

    /**
     * @var string|null
     */
    private $decorateAction;

    private $receiptAccount;

    private $receiptType;

    /**
     * @var \Doctrine\Common\Collections\Collection
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
