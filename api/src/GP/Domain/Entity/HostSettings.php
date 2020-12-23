<?php

namespace App\GP\Domain\Entity;



/**
 * HostSettings
 */
class HostSettings
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $propertyName;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $defaultValue;

    /**
     * @var bool|null
     */
    private $gtmDelivery = true;

    /**
     * @var string|null
     */
    private $valueExample;


}
