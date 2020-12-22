<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TZip
 *
 * @ORM\Table(name="t_zip", indexes={@ORM\Index(name="t_zip_t_geo_cities_id_fk", columns={"city_id"}), @ORM\Index(name="t_zip_t_geo_states_id_fk", columns={"state_id"})})
 * @ORM\Entity
 */
class TZip
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=50, nullable=true)
     */
    private $zip;

    /**
     * @var \TGeoCities
     *
     * @ORM\ManyToOne(targetEntity="TGeoCities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;

    /**
     * @var \TGeoStates
     *
     * @ORM\ManyToOne(targetEntity="TGeoStates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;


}
