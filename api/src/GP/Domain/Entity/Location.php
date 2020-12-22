<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="location", indexes={@ORM\Index(name="city", columns={"city"})})
 * @ORM\Entity
 */
class Location
{
    /**
     * @var int
     *
     * @ORM\Column(name="locId", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $locid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region", type="string", length=2, nullable=true)
     */
    private $region;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=1000, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postalCode", type="string", length=10, nullable=true)
     */
    private $postalcode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $latitude;

    /**
     * @var float|null
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=true)
     */
    private $longitude;

    /**
     * @var int|null
     *
     * @ORM\Column(name="metroCode", type="integer", nullable=true)
     */
    private $metrocode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="areaCode", type="integer", nullable=true)
     */
    private $areacode;


}
