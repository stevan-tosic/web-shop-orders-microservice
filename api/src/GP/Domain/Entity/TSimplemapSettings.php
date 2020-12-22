<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TSimplemapSettings
 *
 * @ORM\Table(name="t_simplemap_settings")
 * @ORM\Entity
 */
class TSimplemapSettings
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
     * @ORM\Column(name="default_value", type="text", length=65535, nullable=true)
     */
    private $defaultValue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="map_pattern", type="string", length=255, nullable=true)
     */
    private $mapPattern;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state_pattern", type="string", length=255, nullable=true)
     */
    private $statePattern;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region_pattern", type="string", length=255, nullable=true)
     */
    private $regionPattern;


}
