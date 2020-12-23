<?php

namespace App\GP\Domain\Entity;



/**
 * Dtproperties
 */
class Dtproperties
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $property;

    /**
     * @var int|null
     */
    private $objectid;

    /**
     * @var string|null
     */
    private $value;

    /**
     * @var string|null
     */
    private $uvalue;

    /**
     * @var string|null
     */
    private $lvalue;

    /**
     * @var int
     */
    private $version = '0';


}
