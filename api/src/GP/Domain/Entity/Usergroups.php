<?php

namespace App\GP\Domain\Entity;



/**
 * Usergroups
 */
class Usergroups
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name0;

    /**
     * @var string
     */
    private $name1;

    /**
     * @var string
     */
    private $name2;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
