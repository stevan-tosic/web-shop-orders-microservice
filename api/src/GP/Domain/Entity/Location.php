<?php

namespace App\GP\Domain\Entity;



/**
 * Location
 */
class Location
{
    /**
     * @var int
     */
    private $locid;

    /**
     * @var string|null
     */
    private $country;

    /**
     * @var string|null
     */
    private $region;

    /**
     * @var string|null
     */
    private $city;

    /**
     * @var string|null
     */
    private $postalcode;

    /**
     * @var float|null
     */
    private $latitude;

    /**
     * @var float|null
     */
    private $longitude;

    /**
     * @var int|null
     */
    private $metrocode;

    /**
     * @var int|null
     */
    private $areacode;


}
