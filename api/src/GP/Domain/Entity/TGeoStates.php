<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TGeoStates
 *
 * @ORM\Table(name="t_geo_states", indexes={@ORM\Index(name="t_geo_states_t_geo_regions_id_fk", columns={"region_id"})})
 * @ORM\Entity
 */
class TGeoStates
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
     * @ORM\Column(name="name_0", type="string", length=64, nullable=false)
     */
    private $name0;

    /**
     * @var string
     *
     * @ORM\Column(name="name_1", type="string", length=64, nullable=false)
     */
    private $name1;

    /**
     * @var string
     *
     * @ORM\Column(name="name_2", type="string", length=64, nullable=false)
     */
    private $name2;

    /**
     * @var string
     *
     * @ORM\Column(name="acronym", type="string", length=8, nullable=false)
     */
    private $acronym;

    /**
     * @var \TGeoRegions
     *
     * @ORM\ManyToOne(targetEntity="TGeoRegions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     * })
     */
    private $region;


}
