<?php

namespace App\GP\Domain\Entity;



/**
 * VariationToTypeMap
 */
class VariationToTypeMap
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $variationId;

    /**
     * @var int|null
     */
    private $typeId;

    /**
     * @var bool|null
     */
    private $variationDropdown = '0';

    /**
     * @var bool|null
     */
    private $propertiesBox = '0';


}
