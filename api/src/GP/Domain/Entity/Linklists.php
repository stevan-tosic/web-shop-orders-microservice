<?php

namespace App\GP\Domain\Entity;



/**
 * Linklists
 */
class Linklists
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
     * @var int|null
     */
    private $parentId;

    /**
     * @var int|null
     */
    private $sortOrder;

    /**
     * @var string|null
     */
    private $cssClass;

    /**
     * @var string|null
     */
    private $color = '';

    /**
     * @var \TPermissions
     *
               *   @ORM\JoinColumn(name="permission_id", referencedColumnName="id")
     * })
     */
    private $permission;

    /**
     * @var \TLinklistsPositions
     *
               *   @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     * })
     */
    private $position;


}
