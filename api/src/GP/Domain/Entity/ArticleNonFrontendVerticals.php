<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleNonFrontendVerticals
 *
 * @ORM\Table(name="t_article_non_frontend_verticals", uniqueConstraints={@ORM\UniqueConstraint(name="t_article_non_frontend_verticals_article_vertical_id_uindex", columns={"article_vertical_id"})})
 * @ORM\Entity
 */
class ArticleNonFrontendVerticals
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float|null
     *
     * @ORM\Column(name="minimum_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $minimumPrice = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="percent_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $percentPrice = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="minimum_price_till", type="float", precision=10, scale=0, nullable=true)
     */
    private $minimumPriceTill = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="billable_per_line", type="boolean", nullable=true)
     */
    private $billablePerLine = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="no_transport_costs_from", type="float", precision=10, scale=0, nullable=true)
     */
    private $noTransportCostsFrom;

    /**
     * @var float|null
     *
     * @ORM\Column(name="minimum_price_limit", type="float", precision=10, scale=0, nullable=true)
     */
    private $minimumPriceLimit = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_after_limit", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceAfterLimit = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_minimum_price_percent", type="boolean", nullable=false)
     */
    private $isMinimumPricePercent = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_price_after_limit_percent", type="boolean", nullable=false)
     */
    private $isPriceAfterLimitPercent = '0';

    /**
     * @var \TArticleVerticals
     *
     * @ORM\ManyToOne(targetEntity="TArticleVerticals")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_vertical_id", referencedColumnName="id")
     * })
     */
    private $articleVertical;


}
