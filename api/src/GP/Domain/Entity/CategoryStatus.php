<?php

namespace App\GP\Domain\Entity;



/**
 * CategoryStatus
 */
class CategoryStatus
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var bool|null
     */
    private $isRedirect;

    /**
     * @var bool|null
     */
    private $isActive;

    /**
     * @var int|null
     */
    private $redirectCode;


}
