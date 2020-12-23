<?php

namespace App\GP\Domain\Entity;



/**
 * Users
 */
class Users
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string|null
     */
    private $password;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var bool|null
     */
    private $dunningAllowed = true;

    private $address;

    private $rank;

    private $partner;

    private $usergroup;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->partner = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usergroup = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
