<?php

namespace App\GP\Domain\Entity;

/**
 * ArticleBundlesArticles
 */
class ArticleBundlesArticles
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $sortOrder;

    /**
     * @var bool
     */
    private $active = true;

    /**
     * @var int
     */
    private $createdBy;

    /**
     * @var \DateTime|null
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     */
    private $updatedBy;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    private $article;

    private $bundle;


}
