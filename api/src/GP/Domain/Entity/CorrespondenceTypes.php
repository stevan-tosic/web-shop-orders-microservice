<?php

namespace App\GP\Domain\Entity;



/**
 * CorrespondenceTypes
 */
class CorrespondenceTypes
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
    private $label;

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
