<?php

namespace App\GP\Domain\Entity;



/**
 * DunningTypes
 */
class DunningTypes
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
     * @var string|null
     */
    private $classname;

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
