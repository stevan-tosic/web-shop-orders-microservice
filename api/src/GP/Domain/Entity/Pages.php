<?php

namespace App\GP\Domain\Entity;



/**
 * Pages
 */
class Pages
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
     * @var string|null
     */
    private $description;

    /**
     * @var int
     */
    private $pageTypeId;

    /**
     * @var int
     */
    private $hostGroupId;

    /**
     * @var bool
     */
    private $isHomepage = '0';


}
