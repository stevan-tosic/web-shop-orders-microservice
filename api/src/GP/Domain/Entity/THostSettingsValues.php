<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THostSettingsValues
 *
 * @ORM\Table(name="t_host_settings_values", indexes={@ORM\Index(name="FK_t_host_settings_values_t_hosts", columns={"host_id"}), @ORM\Index(name="t_host_settings_values_ibfk_1host_setting_id", columns={"host_setting_id"})})
 * @ORM\Entity
 */
class THostSettingsValues
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
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var \THosts
     *
     * @ORM\ManyToOne(targetEntity="THosts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="host_id", referencedColumnName="id")
     * })
     */
    private $host;

    /**
     * @var \THostSettings
     *
     * @ORM\ManyToOne(targetEntity="THostSettings")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="host_setting_id", referencedColumnName="id")
     * })
     */
    private $hostSetting;


}
