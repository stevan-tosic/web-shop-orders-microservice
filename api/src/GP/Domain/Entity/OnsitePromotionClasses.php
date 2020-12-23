<?php

namespace App\GP\Domain\Entity;



/**
 * OnsitePromotionClasses
 */
class OnsitePromotionClasses
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $class;

    private $type;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->type = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
