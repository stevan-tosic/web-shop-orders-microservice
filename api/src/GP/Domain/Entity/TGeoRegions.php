<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TGeoRegions
 *
 * @ORM\Table(name="t_geo_regions", indexes={@ORM\Index(name="t_geo_regions_t_geo_countries_id_fk", columns={"country_id"})})
 * @ORM\Entity
 */
class TGeoRegions
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
     * @var \TGeoCountries
     *
     * @ORM\ManyToOne(targetEntity="TGeoCountries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     * })
     */
    private $country;


}
