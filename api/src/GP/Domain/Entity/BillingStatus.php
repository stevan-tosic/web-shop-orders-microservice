<?php

namespace App\GP\Domain\Entity;



/**
 * BillingStatus
 */
class BillingStatus
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $status0;

    /**
     * @var string|null
     */
    private $status1;

    /**
     * @var string|null
     */
    private $status2;

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
