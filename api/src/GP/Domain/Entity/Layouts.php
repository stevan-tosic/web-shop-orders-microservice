<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Layouts
 *
 * @ORM\Table(name="t_layouts", indexes={@ORM\Index(name="FK__t_layouts__host___1A4AB916", columns={"host_id"}), @ORM\Index(name="FK__t_layouts__image__195694DD", columns={"image_id"})})
 * @ORM\Entity
 */
class Layouts
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
     * @ORM\Column(name="desktop_template_id", type="integer", nullable=true)
     */
    private $desktopTemplateId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mobile_template_id", type="integer", nullable=true)
     */
    private $mobileTemplateId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true)
     */
    private $sortOrder;

    /**
     * @var \THosts
     *
     * @ORM\ManyToOne(targetEntity="THosts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="host_id", referencedColumnName="id")
     * })
     */
    private $host;

    /**
     * @var \TLayoutImages
     *
     * @ORM\ManyToOne(targetEntity="TLayoutImages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="image_id", referencedColumnName="id")
     * })
     */
    private $image;


}
