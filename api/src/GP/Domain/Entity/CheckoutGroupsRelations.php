<?php

namespace App\GP\Domain\Entity;



/**
 * CheckoutGroupsRelations
 */
class CheckoutGroupsRelations
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
     * @var bool|null
     */
    private $active = true;

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

    private $createdBy;

    private $checkoutGroup;

    /**
     * @var \THosts
     *
               *   @ORM\JoinColumn(name="host_id", referencedColumnName="id")
     * })
     */
    private $host;

    private $articleType;

    /**
     * @var \TArticles
     *
               *   @ORM\JoinColumn(name="override_article_id", referencedColumnName="id")
     * })
     */
    private $overrideArticle;


}
