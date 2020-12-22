<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TStatistics
 *
 * @ORM\Table(name="t_statistics")
 * @ORM\Entity
 */
class TStatistics
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
     * @var int|null
     *
     * @ORM\Column(name="sold_items", type="integer", nullable=true)
     */
    private $soldItems = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="turnover", type="float", precision=10, scale=0, nullable=true)
     */
    private $turnover = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="commission", type="float", precision=10, scale=0, nullable=true)
     */
    private $commission = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="profit", type="float", precision=10, scale=0, nullable=true)
     */
    private $profit = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sold_items_paid", type="integer", nullable=true)
     */
    private $soldItemsPaid = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="turnover_paid", type="float", precision=10, scale=0, nullable=true)
     */
    private $turnoverPaid = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="commission_paid", type="float", precision=10, scale=0, nullable=true)
     */
    private $commissionPaid = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="profit_paid", type="float", precision=10, scale=0, nullable=true)
     */
    private $profitPaid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="expired", type="integer", nullable=true)
     */
    private $expired = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="redeemed", type="integer", nullable=true)
     */
    private $redeemed = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="not_redeemed", type="integer", nullable=true)
     */
    private $notRedeemed = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="redeemed_quota", type="float", precision=10, scale=0, nullable=true)
     */
    private $redeemedQuota = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="not_redeemed_quota", type="float", precision=10, scale=0, nullable=true)
     */
    private $notRedeemedQuota = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="redeemed_profit", type="float", precision=10, scale=0, nullable=true)
     */
    private $redeemedProfit = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="not_redeemed_profit", type="float", precision=10, scale=0, nullable=true)
     */
    private $notRedeemedProfit = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="expired_profit", type="float", precision=10, scale=0, nullable=true)
     */
    private $expiredProfit = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="margin", type="float", precision=10, scale=0, nullable=true)
     */
    private $margin = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="margin_quota", type="float", precision=10, scale=0, nullable=true)
     */
    private $marginQuota = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="avg_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $avgPrice = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="avg_price_paid", type="float", precision=10, scale=0, nullable=true)
     */
    private $avgPricePaid = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="avg_price_expired", type="float", precision=10, scale=0, nullable=true)
     */
    private $avgPriceExpired = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="expired_turnover", type="float", precision=10, scale=0, nullable=true)
     */
    private $expiredTurnover = '0';


}
