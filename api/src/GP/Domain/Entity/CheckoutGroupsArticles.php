<?php

namespace App\GP\Domain\Entity;



/**
 * CheckoutGroupsArticles
 */
class CheckoutGroupsArticles
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
    private $default = '0';

    /**
     * @var bool|null
     */
    private $active = true;

    /**
     * @var int
     */
    private $defaultOrder = '0';

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

    private $checkoutGroup;

    private $article;


}
