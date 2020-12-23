<?php

namespace App\GP\Domain\Entity;



/**
 * WidgetTemplates
 */
class WidgetTemplates
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
     * @var string|null
     */
    private $path;

    /**
     * @var int
     */
    private $widgetTypeId;

    /**
     * @var bool
     */
    private $showOnDesktop = true;

    /**
     * @var bool
     */
    private $showOnMobile = '0';


}
