<?php

namespace App\GP\Domain\Entity;



/**
 * ArticleType
 */
class ArticleType
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $short;

    /**
     * @var string|null
     */
    private $title0;

    /**
     * @var string|null
     */
    private $title1;

    /**
     * @var string|null
     */
    private $title2;

    /**
     * @var int|null
     */
    private $defaultShippingStatus;

    /**
     * @var bool|null
     */
    private $printingBill;

    /**
     * @var int|null
     */
    private $sortOrder = '1111';

    /**
     * @var bool
     */
    private $choEnabled = '0';

    private $group;

    private $schedule;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schedule = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
