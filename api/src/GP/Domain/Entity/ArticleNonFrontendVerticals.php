<?php

namespace App\GP\Domain\Entity;



/**
 * ArticleNonFrontendVerticals
 */
class ArticleNonFrontendVerticals
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float|null
     */
    private $minimumPrice = '0';

    /**
     * @var float|null
     */
    private $percentPrice = '0';

    /**
     * @var float|null
     */
    private $minimumPriceTill = '0';

    /**
     * @var bool|null
     */
    private $billablePerLine = '0';

    /**
     * @var float|null
     */
    private $noTransportCostsFrom;

    /**
     * @var float|null
     */
    private $minimumPriceLimit = '0';

    /**
     * @var float|null
     */
    private $priceAfterLimit = '0';

    /**
     * @var bool
     */
    private $isMinimumPricePercent = '0';

    /**
     * @var bool
     */
    private $isPriceAfterLimitPercent = '0';

    private $articleVertical;


}
