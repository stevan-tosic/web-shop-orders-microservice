<?php

namespace App\GP\Domain\Entity;



/**
 * ProductsV1
 */
class ProductsV1
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $categorieid = '0';

    /**
     * @var int|null
     */
    private $providerid = '0';

    /**
     * @var int|null
     */
    private $providersubid = '0';

    /**
     * @var string|null
     */
    private $title0;

    /**
     * @var string|null
     */
    private $title1;

    /**
     * @var string|null
     */
    private $title2;

    /**
     * @var string|null
     */
    private $subtitle0;

    /**
     * @var string|null
     */
    private $subtitle1;

    /**
     * @var string|null
     */
    private $subtitle2;

    /**
     * @var string|null
     */
    private $cleanurl0;

    /**
     * @var string|null
     */
    private $cleanurl1;

    /**
     * @var string|null
     */
    private $cleanurl2;

    /**
     * @var string|null
     */
    private $keywords0;

    /**
     * @var string|null
     */
    private $keywords1;

    /**
     * @var string|null
     */
    private $keywords2;

    /**
     * @var string|null
     */
    private $description0;

    /**
     * @var string|null
     */
    private $description1;

    /**
     * @var string|null
     */
    private $description2;

    /**
     * @var string|null
     */
    private $seo0;

    /**
     * @var string|null
     */
    private $seo1;

    /**
     * @var string|null
     */
    private $seo2;

    /**
     * @var string|null
     */
    private $when0;

    /**
     * @var string|null
     */
    private $when1;

    /**
     * @var string|null
     */
    private $when2;

    /**
     * @var string|null
     */
    private $content0;

    /**
     * @var string|null
     */
    private $content1;

    /**
     * @var string|null
     */
    private $content2;

    /**
     * @var string|null
     */
    private $benefit0;

    /**
     * @var string|null
     */
    private $benefit1;

    /**
     * @var string|null
     */
    private $benefit2;

    /**
     * @var string|null
     */
    private $requirements0;

    /**
     * @var string|null
     */
    private $requirements1;

    /**
     * @var string|null
     */
    private $requirements2;

    /**
     * @var string|null
     */
    private $duration0;

    /**
     * @var string|null
     */
    private $duration1;

    /**
     * @var string|null
     */
    private $duration2;

    /**
     * @var string|null
     */
    private $weather0;

    /**
     * @var string|null
     */
    private $weather1;

    /**
     * @var string|null
     */
    private $weather2;

    /**
     * @var string|null
     */
    private $equipment0;

    /**
     * @var string|null
     */
    private $equipment1;

    /**
     * @var string|null
     */
    private $equipment2;

    /**
     * @var string|null
     */
    private $participants0;

    /**
     * @var string|null
     */
    private $participants1;

    /**
     * @var string|null
     */
    private $participants2;

    /**
     * @var string|null
     */
    private $specials0;

    /**
     * @var string|null
     */
    private $specials1;

    /**
     * @var string|null
     */
    private $specials2;

    /**
     * @var string|null
     */
    private $offlineDescription0;

    /**
     * @var string|null
     */
    private $offlineOverview0;

    /**
     * @var string|null
     */
    private $offlineLocations0;

    /**
     * @var int|null
     */
    private $locationid = '0';

    /**
     * @var int|null
     */
    private $everywhere = '0';

    /**
     * @var int|null
     */
    private $persons = '0';

    /**
     * @var float|null
     */
    private $price = '0';

    /**
     * @var float|null
     */
    private $commission = '0';

    /**
     * @var int|null
     */
    private $active0 = '0';

    /**
     * @var int|null
     */
    private $active1 = '0';

    /**
     * @var int|null
     */
    private $active2 = '0';

    /**
     * @var \DateTime|null
     */
    private $lastAction;

    /**
     * @var int|null
     */
    private $target1 = '0';

    /**
     * @var int|null
     */
    private $target2 = '0';

    /**
     * @var int|null
     */
    private $target3 = '0';

    /**
     * @var int|null
     */
    private $target4 = '0';

    /**
     * @var string|null
     */
    private $tags;

    /**
     * @var int|null
     */
    private $product = '0';

    /**
     * @var int|null
     */
    private $flowers = '0';

    /**
     * @var string|null
     */
    private $specialtag;

    /**
     * @var int|null
     */
    private $target10 = '0';

    /**
     * @var int|null
     */
    private $target20 = '0';

    /**
     * @var float|null
     */
    private $commissionOffline = '0';

    /**
     * @var float|null
     */
    private $priceOffline = '0';

    /**
     * @var float|null
     */
    private $acquisitionPrice = '0';

    /**
     * @var int|null
     */
    private $brandid = '0';

    /**
     * @var string|null
     */
    private $logisticsNote;

    /**
     * @var int|null
     */
    private $distributorid = '0';

    /**
     * @var float|null
     */
    private $marginChf = '0';

    /**
     * @var float|null
     */
    private $marginPercent = '0';

    /**
     * @var float|null
     */
    private $specialPrice = '0';

    /**
     * @var int|null
     */
    private $giftWrap = '0';

    /**
     * @var int|null
     */
    private $option1id = '0';

    /**
     * @var int|null
     */
    private $option2id = '0';

    /**
     * @var int|null
     */
    private $deliverytimeid = '0';

    /**
     * @var int|null
     */
    private $ownStock = '0';

    /**
     * @var int|null
     */
    private $distributorStock = '0';

    /**
     * @var int|null
     */
    private $unitid = '0';

    /**
     * @var int|null
     */
    private $taxid = '0';

    /**
     * @var int
     */
    private $currentlyOffline = '0';

    /**
     * @var string|null
     */
    private $currentlyOffline0;

    /**
     * @var string|null
     */
    private $currentlyOffline1;

    /**
     * @var string|null
     */
    private $currentlyOffline2;

    /**
     * @var string|null
     */
    private $redeemNote0;

    /**
     * @var string|null
     */
    private $redeemNote1;

    /**
     * @var string|null
     */
    private $redeemNote2;

    /**
     * @var int|null
     */
    private $listing = '0';

    /**
     * @var int|null
     */
    private $virtualBox = '0';

    /**
     * @var int|null
     */
    private $grenzregion;

    /**
     * @var int|null
     */
    private $giftForHim;

    /**
     * @var int|null
     */
    private $giftForHer;

    /**
     * @var int|null
     */
    private $giftForLovers;

    /**
     * @var int|null
     */
    private $giftForTwo;

    /**
     * @var int|null
     */
    private $giftForKids;

    /**
     * @var int|null
     */
    private $giftForGroup;

    /**
     * @var int|null
     */
    private $giftForFamily;

    /**
     * @var bool
     */
    private $isTicket = '0';

    /**
     * @var float|null
     */
    private $betsPrice;

    /**
     * @var int
     */
    private $popularity0 = '0';

    /**
     * @var int
     */
    private $popularity1 = '0';

    /**
     * @var int
     */
    private $popularity2 = '0';

    /**
     * @var float
     */
    private $bestPrice = '0';

    /**
     * @var int|null
     */
    private $supplierId;


}
