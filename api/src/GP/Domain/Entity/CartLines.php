<?php

namespace App\GP\Domain\Entity;



/**
 * CartLines
 */
class CartLines
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $gpuserid;

    /**
     * @var int|null
     */
    private $productid;

    /**
     * @var int|null
     */
    private $giftbox;

    /**
     * @var string|null
     */
    private $receiver;

    /**
     * @var float|null
     */
    private $price;

    /**
     * @var float|null
     */
    private $commission;

    /**
     * @var int|null
     */
    private $product;

    /**
     * @var int|null
     */
    private $productVariationId;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @var float|null
     */
    private $acquisitionPrice;

    /**
     * @var int|null
     */
    private $taxid;

    /**
     * @var int|null
     */
    private $articleId;

    /**
     * @var int
     */
    private $hostId;

    /**
     * @var \DateTime|null
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var string|null
     */
    private $sourceCategoryTree;

    /**
     * @var bool
     */
    private $isStandaloneCheckoutArticle = '0';

    private $bundleLine;

    /**
     * @var \TCartLines
     *
               *   @ORM\JoinColumn(name="checkout_article_parent_line_id", referencedColumnName="ID")
     * })
     */
    private $checkoutArticleParentLine;

    private $checkoutGroup;

    private $cart;

    private $sourceCategory;


}
