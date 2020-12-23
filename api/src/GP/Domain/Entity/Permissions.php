<?php

namespace App\GP\Domain\Entity;



/**
 * Permissions
 */
class Permissions
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
     * @var \DateTime|null
     */
    private $creationDate;

    /**
     * @var \TUsers
     *
               *   @ORM\JoinColumn(name="creation_user_id", referencedColumnName="id")
     * })
     */
    private $creationUser;


}
