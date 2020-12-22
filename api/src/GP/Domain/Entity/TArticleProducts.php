<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TArticleProducts
 *
 * @ORM\Table(name="t_article_products", indexes={@ORM\Index(name="article_status_id_index", columns={"article_status_id"}), @ORM\Index(name="brand_id_index", columns={"brand_id"}), @ORM\Index(name="distributor_id_index", columns={"distributor_id"}), @ORM\Index(name="dropshipper_id_index", columns={"dropshipper_id"}), @ORM\Index(name="FK__t_article__last___2B754518", columns={"last_change_user_id"})})
 * @ORM\Entity
 */
class TArticleProducts
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    private $article;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ean", type="string", length=255, nullable=true)
     */
    private $ean;

    /**
     * @var int|null
     *
     * @ORM\Column(name="brand_id", type="integer", nullable=true)
     */
    private $brandId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="brand_article_id", type="string", length=255, nullable=true)
     */
    private $brandArticleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distributor_id", type="integer", nullable=true)
     */
    private $distributorId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dropshipper_id", type="integer", nullable=true)
     */
    private $dropshipperId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_article_id", type="string", length=255, nullable=true)
     */
    private $externalArticleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_title", type="string", length=255, nullable=true)
     */
    private $externalTitle;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer", nullable=false)
     */
    private $stock = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="minimum_stock", type="integer", nullable=false)
     */
    private $minimumStock = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="stock_reserved", type="integer", nullable=false)
     */
    private $stockReserved = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="acquisition_price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $acquisitionPrice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="logistics_note", type="string", length=1024, nullable=true)
     */
    private $logisticsNote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="delivery_time_id", type="integer", nullable=true)
     */
    private $deliveryTimeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="unit_id", type="integer", nullable=true)
     */
    private $unitId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_status_id", type="integer", nullable=true)
     */
    private $articleStatusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="processing_costs", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $processingCosts;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_change_date", type="datetime", nullable=true)
     */
    private $lastChangeDate;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="last_change_user_id", referencedColumnName="id")
     * })
     */
    private $lastChangeUser;


}
