<?php

namespace App\GP\Domain\Entity;



/**
 * SimplemapSettingValues
 */
class SimplemapSettingValues
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $value;

    /**
     * @var string|null
     */
    private $calculated;

    /**
     * @var \TSimplemapMaps
     *
               *   @ORM\JoinColumn(name="map_id", referencedColumnName="id")
     * })
     */
    private $map;

    /**
     * @var \TGeoRegions
     *
               *   @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     * })
     */
    private $region;

    /**
     * @var \TSimplemapSettings
     *
               *   @ORM\JoinColumn(name="setting_id", referencedColumnName="id")
     * })
     */
    private $setting;

    /**
     * @var \TSimplemapStates
     *
               *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;


}
