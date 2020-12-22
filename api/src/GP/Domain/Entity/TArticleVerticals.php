<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TArticleVerticals
 *
 * @ORM\Table(name="t_article_verticals", indexes={@ORM\Index(name="host_id_index", columns={"host_id"}), @ORM\Index(name="title_index", columns={"title"}), @ORM\Index(name="t_article_verticals_slug_index", columns={"slug"}), @ORM\Index(name="t_article_verticals_slug_host_id_index", columns={"slug", "host_id"}), @ORM\Index(name="t_article_verticals_article_product_vertical_id_index", columns={"article_product_vertical_id"}), @ORM\Index(name="t_article_verticals_article_experience_vertical_id_index", columns={"article_experience_vertical_id"}), @ORM\Index(name="t_article_verticals_article", columns={"article_id"}), @ORM\Index(name="subtitle_index", columns={"subtitle"}), @ORM\Index(name="article_reader_category_order", columns={"popularity", "first_activation_date"}), @ORM\Index(name="FK__t_article__last___167A2832", columns={"last_change_user_id"}), @ORM\Index(name="FK__t_article__last___158603F9", columns={"last_activation_user_id"}), @ORM\Index(name="FK__t_article__first__1491DFC0", columns={"first_activation_user_id"}), @ORM\Index(name="FK__t_article__creat__139DBB87", columns={"creation_user_id"}), @ORM\Index(name="article_reader_category_where", columns={"host_id", "is_active", "is_searchable", "best_price"})})
 * @ORM\Entity
 */
class TArticleVerticals
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
     * @var int|null
     *
     * @ORM\Column(name="article_experience_vertical_id", type="integer", nullable=true)
     */
    private $articleExperienceVerticalId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_product_vertical_id", type="integer", nullable=true)
     */
    private $articleProductVerticalId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_id", type="integer", nullable=true)
     */
    private $articleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fallback", type="integer", nullable=true)
     */
    private $fallback;

    /**
     * @var int|null
     *
     * @ORM\Column(name="host_id", type="integer", nullable=true)
     */
    private $hostId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=200, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle", type="string", length=200, nullable=true)
     */
    private $subtitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_description", type="text", length=0, nullable=true)
     */
    private $metaDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_long", type="text", length=0, nullable=true)
     */
    private $descriptionLong;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_short", type="text", length=0, nullable=true)
     */
    private $descriptionShort;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="popularity", type="integer", nullable=true)
     */
    private $popularity;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="best_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $bestPrice = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="special_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $specialPrice = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="noindex", type="boolean", nullable=false)
     */
    private $noindex = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="nofollow", type="boolean", nullable=false)
     */
    private $nofollow = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="sitemap", type="boolean", nullable=false, options={"default"="1"})
     */
    private $sitemap = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="google_shopping_enabled", type="boolean", nullable=false, options={"default"="1"})
     */
    private $googleShoppingEnabled = true;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="first_activation_date", type="datetime", nullable=true)
     */
    private $firstActivationDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_activation_date", type="datetime", nullable=true)
     */
    private $lastActivationDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_change_date", type="datetime", nullable=true)
     */
    private $lastChangeDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_searchable", type="boolean", nullable=false)
     */
    private $isSearchable = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_recommendable", type="boolean", nullable=true, options={"default"="1"})
     */
    private $isRecommendable = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="popularity_manual", type="integer", nullable=true)
     */
    private $popularityManual;

    /**
     * @var int|null
     *
     * @ORM\Column(name="popularity_auto", type="integer", nullable=true)
     */
    private $popularityAuto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="popularity_from", type="datetime", nullable=true)
     */
    private $popularityFrom;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="popularity_to", type="datetime", nullable=true)
     */
    private $popularityTo;

    /**
     * @var bool
     *
     * @ORM\Column(name="siroop_enabled", type="boolean", nullable=false, options={"default"="1"})
     */
    private $siroopEnabled = true;

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
    private $percentPrice;

    /**
     * @var float|null
     *
     * @ORM\Column(name="minimum_price_till", type="float", precision=10, scale=0, nullable=true)
     */
    private $minimumPriceTill = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="erp_number", type="integer", nullable=true)
     */
    private $erpNumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="cho_vertical", type="boolean", nullable=false)
     */
    private $choVertical = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="allow_cho_groups", type="boolean", nullable=false)
     */
    private $allowChoGroups = '0';

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creation_user_id", referencedColumnName="id")
     * })
     */
    private $creationUser;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="first_activation_user_id", referencedColumnName="id")
     * })
     */
    private $firstActivationUser;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="last_activation_user_id", referencedColumnName="id")
     * })
     */
    private $lastActivationUser;

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
