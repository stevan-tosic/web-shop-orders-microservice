<?php

namespace App\GP\Domain\Entity;



/**
 * OnsitePromotionTypes
 */
class OnsitePromotionTypes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $strategy;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $class;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->class = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
