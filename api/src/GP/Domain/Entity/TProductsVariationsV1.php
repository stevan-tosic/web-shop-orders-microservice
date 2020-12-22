<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProductsVariationsV1
 *
 * @ORM\Table(name="t_products_variations_v1", indexes={@ORM\Index(name="FK_t_products_variations_t_article", columns={"article_id"}), @ORM\Index(name="IX_t_products_variations_productID", columns={"productID"})})
 * @ORM\Entity
 */
class TProductsVariationsV1
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
     * @var int|null
     *
     * @ORM\Column(name="productID", type="integer", nullable=true)
     */
    private $productid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="option1Value_0", type="string", length=50, nullable=true)
     */
    private $option1value0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="option2Value_0", type="string", length=50, nullable=true)
     */
    private $option2value0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ean", type="string", length=50, nullable=true)
     */
    private $ean;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brandNr", type="string", length=50, nullable=true)
     */
    private $brandnr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="distributorNr", type="string", length=50, nullable=true)
     */
    private $distributornr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="distributorTitle", type="string", length=50, nullable=true)
     */
    private $distributortitle;

    /**
     * @var int|null
     *
     * @ORM\Column(name="stock", type="integer", nullable=true)
     */
    private $stock = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="minimum_stock", type="integer", nullable=true)
     */
    private $minimumStock = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="option1Value_1", type="string", length=50, nullable=true)
     */
    private $option1value1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="option2Value_1", type="string", length=50, nullable=true)
     */
    private $option2value1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="option1Value_2", type="string", length=50, nullable=true)
     */
    private $option1value2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="option2Value_2", type="string", length=50, nullable=true)
     */
    private $option2value2;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_reserved", type="integer", nullable=false)
     */
    private $stockReserved = '0';

    /**
     * @var \TArticleV1
     *
     * @ORM\ManyToOne(targetEntity="TArticleV1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="ID")
     * })
     */
    private $article;


}
