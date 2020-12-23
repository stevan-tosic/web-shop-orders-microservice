<?php

namespace App\GP\Domain\Entity;



/**
 * ArticleVerticals
 */
class ArticleVerticals
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $articleExperienceVerticalId;

    /**
     * @var int|null
     */
    private $articleProductVerticalId;

    /**
     * @var int|null
     */
    private $articleId;

    /**
     * @var int|null
     */
    private $fallback;

    /**
     * @var int|null
     */
    private $hostId;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $subtitle;

    /**
     * @var string|null
     */
    private $slug;

    /**
     * @var string|null
     */
    private $metaDescription;

    /**
     * @var string|null
     */
    private $descriptionLong;

    /**
     * @var string|null
     */
    private $descriptionShort;

    /**
     * @var bool
     */
    private $isActive = '0';

    /**
     * @var int|null
     */
    private $popularity;

    /**
     * @var float
     */
    private $price = '0';

    /**
     * @var float
     */
    private $bestPrice = '0';

    /**
     * @var float
     */
    private $specialPrice = '0';

    /**
     * @var bool
     */
    private $noindex = '0';

    /**
     * @var bool
     */
    private $nofollow = '0';

    /**
     * @var bool
     */
    private $sitemap = true;

    /**
     * @var bool
     */
    private $googleShoppingEnabled = true;

    /**
     * @var \DateTime|null
     */
    private $firstActivationDate;

    /**
     * @var \DateTime|null
     */
    private $lastActivationDate;

    /**
     * @var \DateTime|null
     */
    private $creationDate;

    /**
     * @var \DateTime|null
     */
    private $lastChangeDate;

    /**
     * @var bool
     */
    private $isSearchable = '0';

    /**
     * @var bool|null
     */
    private $isRecommendable = true;

    /**
     * @var int|null
     */
    private $popularityManual;

    /**
     * @var int|null
     */
    private $popularityAuto;

    /**
     * @var \DateTime|null
     */
    private $popularityFrom;

    /**
     * @var \DateTime|null
     */
    private $popularityTo;

    /**
     * @var bool
     */
    private $siroopEnabled = true;

    /**
     * @var float|null
     */
    private $minimumPrice = '0';

    /**
     * @var float|null
     */
    private $percentPrice;

    /**
     * @var float|null
     */
    private $minimumPriceTill = '0';

    /**
     * @var int|null
     */
    private $erpNumber;

    /**
     * @var bool
     */
    private $choVertical = '0';

    /**
     * @var bool
     */
    private $allowChoGroups = '0';

    private $creationUser;

    private $firstActivationUser;

    private $lastActivationUser;

    private $lastChangeUser;


}
