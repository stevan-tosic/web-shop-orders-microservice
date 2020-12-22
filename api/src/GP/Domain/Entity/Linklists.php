<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Linklists
 *
 * @ORM\Table(name="t_linklists", indexes={@ORM\Index(name="FK__t_linklis__permi__20F7B6A5", columns={"permission_id"}), @ORM\Index(name="FK__t_linklis__posit__23D42350", columns={"position_id"})})
 * @ORM\Entity
 */
class Linklists
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true)
     */
    private $sortOrder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="css_class", type="string", length=250, nullable=true)
     */
    private $cssClass;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=6, nullable=true)
     */
    private $color = '';

    /**
     * @var \TPermissions
     *
     * @ORM\ManyToOne(targetEntity="TPermissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permission_id", referencedColumnName="id")
     * })
     */
    private $permission;

    /**
     * @var \TLinklistsPositions
     *
     * @ORM\ManyToOne(targetEntity="TLinklistsPositions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="position_id", referencedColumnName="id")
     * })
     */
    private $position;


}
