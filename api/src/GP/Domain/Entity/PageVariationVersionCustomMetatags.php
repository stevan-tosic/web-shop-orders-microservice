<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageVariationVersionCustomMetatags
 *
 * @ORM\Table(name="t_page_variation_version_custom_metatags", indexes={@ORM\Index(name="fk_page_additional_metatags_version", columns={"page_version_id"})})
 * @ORM\Entity
 */
class PageVariationVersionCustomMetatags
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
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var \TPageVariationVersions
     *
     * @ORM\ManyToOne(targetEntity="TPageVariationVersions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="page_version_id", referencedColumnName="id")
     * })
     */
    private $pageVersion;


}
