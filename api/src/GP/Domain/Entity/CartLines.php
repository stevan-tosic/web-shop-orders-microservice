<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CartLines
 *
 * @ORM\Table(name="t_cart_lines", indexes={@ORM\Index(name="FK_bundle_line_id", columns={"bundle_line_id"}), @ORM\Index(name="FK_checkout_article_parent_line_id", columns={"checkout_article_parent_line_id"}), @ORM\Index(name="FK_checkout_group_id", columns={"checkout_group_id"}), @ORM\Index(name="t_cart_lines_article_id_index", columns={"article_id"}), @ORM\Index(name="t_cart_lines_cart_id_index", columns={"cart_id"}), @ORM\Index(name="t_cart_lines_host_id_index", columns={"host_id"}), @ORM\Index(name="t_cart_lines_source_category_id_FK", columns={"source_category_id"}), @ORM\Index(name="t_cart_lines_taxID_index", columns={"taxID"})})
 * @ORM\Entity
 */
class CartLines
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gpUserID", type="string", length=50, nullable=true)
     */
    private $gpuserid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="productID", type="integer", nullable=true)
     */
    private $productid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="giftbox", type="integer", nullable=true)
     */
    private $giftbox;

    /**
     * @var string|null
     *
     * @ORM\Column(name="receiver", type="string", length=50, nullable=true)
     */
    private $receiver;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var float|null
     *
     * @ORM\Column(name="commission", type="float", precision=10, scale=0, nullable=true)
     */
    private $commission;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product", type="integer", nullable=true)
     */
    private $product;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_variation_id", type="integer", nullable=true)
     */
    private $productVariationId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var float|null
     *
     * @ORM\Column(name="acquisition_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $acquisitionPrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="taxID", type="integer", nullable=true)
     */
    private $taxid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_id", type="integer", nullable=true)
     */
    private $articleId;

    /**
     * @var int
     *
     * @ORM\Column(name="host_id", type="integer", nullable=false)
     */
    private $hostId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="source_category_tree", type="string", length=255, nullable=true)
     */
    private $sourceCategoryTree;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_standalone_checkout_article", type="boolean", nullable=false)
     */
    private $isStandaloneCheckoutArticle = '0';

    /**
     * @var \TCartLines
     *
     * @ORM\ManyToOne(targetEntity="TCartLines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bundle_line_id", referencedColumnName="ID")
     * })
     */
    private $bundleLine;

    /**
     * @var \TCartLines
     *
     * @ORM\ManyToOne(targetEntity="TCartLines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="checkout_article_parent_line_id", referencedColumnName="ID")
     * })
     */
    private $checkoutArticleParentLine;

    /**
     * @var \TCheckoutGroups
     *
     * @ORM\ManyToOne(targetEntity="TCheckoutGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="checkout_group_id", referencedColumnName="id")
     * })
     */
    private $checkoutGroup;

    /**
     * @var \TCarts
     *
     * @ORM\ManyToOne(targetEntity="TCarts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cart_id", referencedColumnName="id")
     * })
     */
    private $cart;

    /**
     * @var \TCategoriesNew
     *
     * @ORM\ManyToOne(targetEntity="TCategoriesNew")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="source_category_id", referencedColumnName="id")
     * })
     */
    private $sourceCategory;


}
