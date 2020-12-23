<?php

namespace App\GP\Domain\Entity;



/**
 * CheckoutGroups
 */
class CheckoutGroups
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
     * @var bool
     */
    private $standalone = '0';

    /**
     * @var bool
     */
    private $multiple = '0';

    /**
     * @var bool
     */
    private $mandatory = true;

    /**
     * @var bool
     */
    private $skipChoice = '0';

    /**
     * @var int
     */
    private $minArticles = '3';

    /**
     * @var int
     */
    private $maxArticles = '6';

    /**
     * @var bool
     */
    private $quantifiable = '0';

    /**
     * @var bool
     */
    private $creditCheckRequired = '0';

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

    private $description;

    private $title;

    private $category;


}
