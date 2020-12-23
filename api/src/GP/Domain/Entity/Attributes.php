<?php

namespace App\GP\Domain\Entity;



/**
 * Attributes
 */
class Attributes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $articleId;

    /**
     * @var int
     */
    private $attributeValueTypeId;

    /**
     * @var string|null
     */
    private $name0;

    /**
     * @var string|null
     */
    private $name1;

    /**
     * @var string|null
     */
    private $name2;

    /**
     * @var int
     */
    private $sortOrder;

    /**
     * @var bool|null
     */
    private $isActive;

    /**
     * @var bool
     */
    private $isRequired = true;

    /**
     * @var string|null
     */
    private $defaultValue;

    /**
     * @var bool|null
     */
    private $hasPreview;


}
