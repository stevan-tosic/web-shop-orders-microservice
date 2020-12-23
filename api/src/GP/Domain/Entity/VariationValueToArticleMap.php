<?php

namespace App\GP\Domain\Entity;



/**
 * VariationValueToArticleMap
 */
class VariationValueToArticleMap
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $articleId;

    /**
     * @var int|null
     */
    private $valueId;

    /**
     * @var int|null
     */
    private $variationToTypeMapId;

    /**
     * @var bool
     */
    private $sortOrder = true;


}
