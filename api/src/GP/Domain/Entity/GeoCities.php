<?php

namespace App\GP\Domain\Entity;



/**
 * GeoCities
 */
class GeoCities
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $stateId;

    /**
     * @var bool
     */
    private $isBorderRegion = '0';

    private $mainZip;


}
