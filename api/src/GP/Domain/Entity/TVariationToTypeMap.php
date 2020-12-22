<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TVariationToTypeMap
 *
 * @ORM\Table(name="t_variation_to_type_map")
 * @ORM\Entity
 */
class TVariationToTypeMap
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
     * @var int|null
     *
     * @ORM\Column(name="variation_id", type="integer", nullable=true)
     */
    private $variationId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true)
     */
    private $typeId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="variation_dropdown", type="boolean", nullable=true)
     */
    private $variationDropdown = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="properties_box", type="boolean", nullable=true)
     */
    private $propertiesBox = '0';


}
