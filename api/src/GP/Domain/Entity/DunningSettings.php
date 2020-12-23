<?php

namespace App\GP\Domain\Entity;



/**
 * DunningSettings
 */
class DunningSettings
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
     * @var string|null
     */
    private $label;

    /**
     * @var int|null
     */
    private $days;

    /**
     * @var bool|null
     */
    private $isEmailEnabled;


}
