<?php

namespace App\GP\Domain\Entity;



/**
 * LinklistsLinks
 */
class LinklistsLinks
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $target;

    /**
     * @var string|null
     */
    private $rel;

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

    private $linklist;

    /**
     * @var \TPermissions
     *
               *   @ORM\JoinColumn(name="permission_id", referencedColumnName="id")
     * })
     */
    private $permission;


}
