<?php

namespace App\GP\Domain\Entity;



/**
 * UserAcl
 */
class UserAcl
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $creationDate;

    private $creationUser;

    private $permission;

    private $usergroup;


}
