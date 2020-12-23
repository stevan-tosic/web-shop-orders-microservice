<?php

namespace App\GP\Domain\Entity;



/**
 * WidgetTypes
 */
class WidgetTypes
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
     * @var bool|null
     */
    private $isList;

    /**
     * @var bool|null
     */
    private $isTopLevel;

    /**
     * @var bool
     */
    private $showOnDesktop = true;

    /**
     * @var bool
     */
    private $showOnMobile = true;


}
