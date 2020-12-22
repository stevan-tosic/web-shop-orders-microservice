<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TLinklistsLinks
 *
 * @ORM\Table(name="t_linklists_links", indexes={@ORM\Index(name="FK__t_linklis__linkl__22DFFF17", columns={"linklist_id"}), @ORM\Index(name="FK__t_linklis__permi__21EBDADE", columns={"permission_id"})})
 * @ORM\Entity
 */
class TLinklistsLinks
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
     * @var string
     *
     * @ORM\Column(name="text", type="string", length=255, nullable=false)
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="target", type="string", length=20, nullable=true)
     */
    private $target;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rel", type="string", length=20, nullable=true)
     */
    private $rel;

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
     * @var \TLinklists
     *
     * @ORM\ManyToOne(targetEntity="TLinklists")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="linklist_id", referencedColumnName="id")
     * })
     */
    private $linklist;

    /**
     * @var \TPermissions
     *
     * @ORM\ManyToOne(targetEntity="TPermissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permission_id", referencedColumnName="id")
     * })
     */
    private $permission;


}
