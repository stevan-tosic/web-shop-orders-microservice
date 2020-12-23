<?php

namespace App\GP\Domain\Entity;



/**
 * Infoboxes
 */
class Infoboxes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string|null
     */
    private $text;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    private $creationUser;

    /**
     * @var \TPermissions
     *
               *   @ORM\JoinColumn(name="permission_id", referencedColumnName="id")
     * })
     */
    private $permission;


}
