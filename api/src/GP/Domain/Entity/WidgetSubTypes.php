<?php

namespace App\GP\Domain\Entity;



/**
 * WidgetSubTypes
 */
class WidgetSubTypes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $mainWidgetTypeId;

    /**
     * @var bool|null
     */
    private $isRequired;

    /**
     * @var int|null
     */
    private $sortOrder;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var int
     */
    private $subWidgetTypeId;


}
