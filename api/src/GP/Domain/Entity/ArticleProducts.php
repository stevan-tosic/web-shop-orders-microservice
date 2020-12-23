<?php

namespace App\GP\Domain\Entity;



/**
 * ArticleProducts
 */
class ArticleProducts
{
    /**
     * @var int
     */
    private $id;

    private $article;

    /**
     * @var string|null
     */
    private $ean;

    /**
     * @var int|null
     */
    private $brandId;

    /**
     * @var string|null
     */
    private $brandArticleId;

    /**
     * @var int|null
     */
    private $distributorId;

    /**
     * @var int|null
     */
    private $dropshipperId;

    /**
     * @var string|null
     */
    private $externalArticleId;

    /**
     * @var string|null
     */
    private $externalTitle;

    /**
     * @var int
     */
    private $stock = '0';

    /**
     * @var int
     */
    private $minimumStock = '0';

    /**
     * @var int
     */
    private $stockReserved = '0';

    /**
     * @var string
     */
    private $acquisitionPrice;

    /**
     * @var string|null
     */
    private $logisticsNote;

    /**
     * @var int|null
     */
    private $deliveryTimeId;

    /**
     * @var int|null
     */
    private $unitId;

    /**
     * @var int|null
     */
    private $articleStatusId;

    /**
     * @var string|null
     */
    private $processingCosts;

    /**
     * @var \DateTime|null
     */
    private $lastChangeDate;

    /**
     * @var \TUsers
     *
               *   @ORM\JoinColumn(name="last_change_user_id", referencedColumnName="id")
     * })
     */
    private $lastChangeUser;


}
