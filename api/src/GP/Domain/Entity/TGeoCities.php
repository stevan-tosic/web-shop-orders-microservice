<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TGeoCities
 *
 * @ORM\Table(name="t_geo_cities", indexes={@ORM\Index(name="t_geo_cities_t_zip_ID_fk", columns={"main_zip_id"})})
 * @ORM\Entity
 */
class TGeoCities
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
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="state_id", type="integer", nullable=false)
     */
    private $stateId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_border_region", type="boolean", nullable=false)
     */
    private $isBorderRegion = '0';

    /**
     * @var \TZip
     *
     * @ORM\ManyToOne(targetEntity="TZip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="main_zip_id", referencedColumnName="ID")
     * })
     */
    private $mainZip;


}
