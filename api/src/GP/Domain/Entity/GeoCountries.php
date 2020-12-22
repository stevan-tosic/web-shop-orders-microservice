<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GeoCountries
 *
 * @ORM\Table(name="t_geo_countries")
 * @ORM\Entity
 */
class GeoCountries
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
     * @var bool|null
     *
     * @ORM\Column(name="in_checkout", type="boolean", nullable=true)
     */
    private $inCheckout;

    /**
     * @var string|null
     *
     * @ORM\Column(name="alpha3_code", type="string", length=3, nullable=true)
     */
    private $alpha3Code;


}
