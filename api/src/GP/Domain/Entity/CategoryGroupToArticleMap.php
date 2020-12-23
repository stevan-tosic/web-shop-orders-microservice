<?php

namespace App\GP\Domain\Entity;



/**
 * CategoryGroupToArticleMap
 */
class CategoryGroupToArticleMap
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $hostGroupId;

    /**
     * @var int|null
     */
    private $sortOrder;

    private $article;

    private $categoryGroup;


}
