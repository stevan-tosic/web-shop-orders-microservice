<?php

namespace App\GP\Domain\Entity;



/**
 * Statistics
 */
class Statistics
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $productid = '0';

    /**
     * @var int|null
     */
    private $soldItems = '0';

    /**
     * @var float|null
     */
    private $turnover = '0';

    /**
     * @var float|null
     */
    private $commission = '0';

    /**
     * @var float|null
     */
    private $profit = '0';

    /**
     * @var int|null
     */
    private $soldItemsPaid = '0';

    /**
     * @var float|null
     */
    private $turnoverPaid = '0';

    /**
     * @var float|null
     */
    private $commissionPaid = '0';

    /**
     * @var float|null
     */
    private $profitPaid = '0';

    /**
     * @var int|null
     */
    private $expired = '0';

    /**
     * @var int|null
     */
    private $redeemed = '0';

    /**
     * @var int|null
     */
    private $notRedeemed = '0';

    /**
     * @var float|null
     */
    private $redeemedQuota = '0';

    /**
     * @var float|null
     */
    private $notRedeemedQuota = '0';

    /**
     * @var float|null
     */
    private $redeemedProfit = '0';

    /**
     * @var float|null
     */
    private $notRedeemedProfit = '0';

    /**
     * @var float|null
     */
    private $expiredProfit = '0';

    /**
     * @var float|null
     */
    private $margin = '0';

    /**
     * @var float|null
     */
    private $marginQuota = '0';

    /**
     * @var float|null
     */
    private $avgPrice = '0';

    /**
     * @var float|null
     */
    private $avgPricePaid = '0';

    /**
     * @var float|null
     */
    private $avgPriceExpired = '0';

    /**
     * @var float|null
     */
    private $expiredTurnover = '0';


}
