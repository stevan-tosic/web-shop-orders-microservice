<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THostSettings
 *
 * @ORM\Table(name="t_host_settings")
 * @ORM\Entity
 */
class THostSettings
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
     * @ORM\Column(name="property_name", type="string", length=50, nullable=false)
     */
    private $propertyName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_value", type="string", length=255, nullable=true)
     */
    private $defaultValue;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="gtm_delivery", type="boolean", nullable=true, options={"default"="1"})
     */
    private $gtmDelivery = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_example", type="string", length=255, nullable=true)
     */
    private $valueExample;


}
