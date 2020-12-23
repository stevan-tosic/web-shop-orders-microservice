<?php

namespace App\GP\Domain\Entity;



/**
 * Layouts
 */
class Layouts
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
     * @var int|null
     */
    private $desktopTemplateId;

    /**
     * @var int|null
     */
    private $mobileTemplateId;

    /**
     * @var int|null
     */
    private $sortOrder;

    private $host;

    private $image;


}
