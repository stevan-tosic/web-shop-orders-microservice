<?php

namespace App\GP\Domain\Entity;



/**
 * OnsitePromotionSchedules
 */
class OnsitePromotionSchedules
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $showOnMobile = true;

    /**
     * @var bool
     */
    private $showOnDesktop = true;

    /**
     * @var \DateTime|null
     */
    private $startDate;

    /**
     * @var \DateTime|null
     */
    private $endDate;

    private $promotion;

    private $articleType;

    private $dropshipper;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articleType = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dropshipper = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
