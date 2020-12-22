<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SimplemapSettingValues
 *
 * @ORM\Table(name="t_simplemap_setting_values", uniqueConstraints={@ORM\UniqueConstraint(name="t_simplemap_state_setting_values_map_id_uindex", columns={"map_id", "setting_id", "state_id", "region_id"})}, indexes={@ORM\Index(name="t_simplemap_setting_values_t_simplemap_region_id_fk", columns={"region_id"}), @ORM\Index(name="t_simplemap_setting_values_t_simplemap_settings_id_fk", columns={"setting_id"}), @ORM\Index(name="t_simplemap_setting_values_t_simplemap_states_id_fk", columns={"state_id"}), @ORM\Index(name="IDX_3881A2353C55F64", columns={"map_id"})})
 * @ORM\Entity
 */
class SimplemapSettingValues
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
     * @ORM\Column(name="value", type="text", length=65535, nullable=true)
     */
    private $value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="calculated", type="string", length=1024, nullable=true)
     */
    private $calculated;

    /**
     * @var \TSimplemapMaps
     *
     * @ORM\ManyToOne(targetEntity="TSimplemapMaps")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="map_id", referencedColumnName="id")
     * })
     */
    private $map;

    /**
     * @var \TGeoRegions
     *
     * @ORM\ManyToOne(targetEntity="TGeoRegions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     * })
     */
    private $region;

    /**
     * @var \TSimplemapSettings
     *
     * @ORM\ManyToOne(targetEntity="TSimplemapSettings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="setting_id", referencedColumnName="id")
     * })
     */
    private $setting;

    /**
     * @var \TSimplemapStates
     *
     * @ORM\ManyToOne(targetEntity="TSimplemapStates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;


}
