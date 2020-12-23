<?php

namespace App\GP\Domain\Entity;



/**
 * HostSettingsValues
 */
class HostSettingsValues
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $value;

    private $host;

    /**
     * @var \THostSettings
     *
               *   @ORM\JoinColumn(name="host_setting_id", referencedColumnName="id")
     * })
     */
    private $hostSetting;


}
