<?php

namespace App\GP\Domain\Entity;



/**
 * HostTypes
 */
class HostTypes
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
     * @var string
     */
    private $shortName = 'web';

    /**
     * @var bool
     */
    private $isShop = true;


}
