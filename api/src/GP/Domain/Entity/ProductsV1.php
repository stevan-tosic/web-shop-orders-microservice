<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductsV1
 *
 * @ORM\Table(name="t_products_v1", indexes={@ORM\Index(name="IX_t_products", columns={"categorieID"}), @ORM\Index(name="IX_t_products_1", columns={"locationID"}), @ORM\Index(name="IX_t_products_2", columns={"providerID"}), @ORM\Index(name="IX_t_products_3", columns={"providerSubID"})})
 * @ORM\Entity
 */
class ProductsV1
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
     * @ORM\Column(name="categorieID", type="integer", nullable=true)
     */
    private $categorieid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="providerID", type="integer", nullable=true)
     */
    private $providerid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="providerSubID", type="integer", nullable=true)
     */
    private $providersubid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_0", type="string", length=200, nullable=true)
     */
    private $title0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_1", type="string", length=200, nullable=true)
     */
    private $title1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_2", type="string", length=200, nullable=true)
     */
    private $title2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle_0", type="string", length=200, nullable=true)
     */
    private $subtitle0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle_1", type="string", length=200, nullable=true)
     */
    private $subtitle1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle_2", type="string", length=200, nullable=true)
     */
    private $subtitle2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cleanURL_0", type="string", length=400, nullable=true)
     */
    private $cleanurl0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cleanURL_1", type="string", length=400, nullable=true)
     */
    private $cleanurl1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cleanURL_2", type="string", length=400, nullable=true)
     */
    private $cleanurl2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords_0", type="string", length=200, nullable=true)
     */
    private $keywords0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords_1", type="string", length=200, nullable=true)
     */
    private $keywords1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords_2", type="string", length=200, nullable=true)
     */
    private $keywords2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_0", type="text", length=0, nullable=true)
     */
    private $description0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_1", type="text", length=0, nullable=true)
     */
    private $description1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_2", type="text", length=0, nullable=true)
     */
    private $description2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_0", type="text", length=0, nullable=true)
     */
    private $seo0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_1", type="text", length=0, nullable=true)
     */
    private $seo1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_2", type="text", length=0, nullable=true)
     */
    private $seo2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="when_0", type="string", length=100, nullable=true)
     */
    private $when0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="when_1", type="string", length=100, nullable=true)
     */
    private $when1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="when_2", type="string", length=100, nullable=true)
     */
    private $when2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_0", type="text", length=0, nullable=true)
     */
    private $content0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_1", type="text", length=0, nullable=true)
     */
    private $content1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_2", type="text", length=0, nullable=true)
     */
    private $content2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="benefit_0", type="text", length=0, nullable=true)
     */
    private $benefit0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="benefit_1", type="text", length=0, nullable=true)
     */
    private $benefit1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="benefit_2", type="text", length=0, nullable=true)
     */
    private $benefit2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requirements_0", type="text", length=0, nullable=true)
     */
    private $requirements0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requirements_1", type="text", length=0, nullable=true)
     */
    private $requirements1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requirements_2", type="text", length=0, nullable=true)
     */
    private $requirements2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duration_0", type="text", length=0, nullable=true)
     */
    private $duration0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duration_1", type="text", length=0, nullable=true)
     */
    private $duration1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duration_2", type="text", length=0, nullable=true)
     */
    private $duration2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weather_0", type="text", length=0, nullable=true)
     */
    private $weather0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weather_1", type="text", length=0, nullable=true)
     */
    private $weather1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weather_2", type="text", length=0, nullable=true)
     */
    private $weather2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="equipment_0", type="text", length=0, nullable=true)
     */
    private $equipment0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="equipment_1", type="text", length=0, nullable=true)
     */
    private $equipment1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="equipment_2", type="text", length=0, nullable=true)
     */
    private $equipment2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participants_0", type="text", length=0, nullable=true)
     */
    private $participants0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participants_1", type="text", length=0, nullable=true)
     */
    private $participants1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participants_2", type="text", length=0, nullable=true)
     */
    private $participants2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="specials_0", type="text", length=0, nullable=true)
     */
    private $specials0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="specials_1", type="text", length=0, nullable=true)
     */
    private $specials1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="specials_2", type="text", length=0, nullable=true)
     */
    private $specials2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offline_description_0", type="text", length=0, nullable=true)
     */
    private $offlineDescription0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offline_overview_0", type="text", length=0, nullable=true)
     */
    private $offlineOverview0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offline_locations_0", type="text", length=0, nullable=true)
     */
    private $offlineLocations0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="locationID", type="integer", nullable=true)
     */
    private $locationid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="everywhere", type="integer", nullable=true)
     */
    private $everywhere = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="persons", type="integer", nullable=true)
     */
    private $persons = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="commission", type="float", precision=10, scale=0, nullable=true)
     */
    private $commission = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="active_0", type="integer", nullable=true)
     */
    private $active0 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="active_1", type="integer", nullable=true)
     */
    private $active1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="active_2", type="integer", nullable=true)
     */
    private $active2 = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_action", type="datetime", nullable=true)
     */
    private $lastAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_1", type="integer", nullable=true)
     */
    private $target1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_2", type="integer", nullable=true)
     */
    private $target2 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_3", type="integer", nullable=true)
     */
    private $target3 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_4", type="integer", nullable=true)
     */
    private $target4 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tags", type="string", length=50, nullable=true)
     */
    private $tags;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product", type="integer", nullable=true)
     */
    private $product = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="flowers", type="integer", nullable=true)
     */
    private $flowers = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="specialTag", type="string", length=100, nullable=true)
     */
    private $specialtag;

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_10", type="integer", nullable=true)
     */
    private $target10 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="target_20", type="integer", nullable=true)
     */
    private $target20 = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="commission_offline", type="float", precision=10, scale=0, nullable=true)
     */
    private $commissionOffline = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_offline", type="float", precision=10, scale=0, nullable=true)
     */
    private $priceOffline = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="acquisition_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $acquisitionPrice = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="brandID", type="integer", nullable=true)
     */
    private $brandid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="logistics_note", type="string", length=1024, nullable=true)
     */
    private $logisticsNote;

    /**
     * @var int|null
     *
     * @ORM\Column(name="distributorID", type="integer", nullable=true)
     */
    private $distributorid = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="margin_chf", type="float", precision=10, scale=0, nullable=true)
     */
    private $marginChf = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="margin_percent", type="float", precision=10, scale=0, nullable=true)
     */
    private $marginPercent = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="special_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $specialPrice = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="gift_wrap", type="integer", nullable=true)
     */
    private $giftWrap = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="option1ID", type="integer", nullable=true)
     */
    private $option1id = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="option2ID", type="integer", nullable=true)
     */
    private $option2id = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="deliveryTimeID", type="integer", nullable=true)
     */
    private $deliverytimeid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="own_stock", type="integer", nullable=true)
     */
    private $ownStock = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="distributor_stock", type="integer", nullable=true)
     */
    private $distributorStock = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="unitID", type="integer", nullable=true)
     */
    private $unitid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="taxID", type="integer", nullable=true)
     */
    private $taxid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="currently_offline", type="integer", nullable=false)
     */
    private $currentlyOffline = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="currently_offline_0", type="text", length=0, nullable=true)
     */
    private $currentlyOffline0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currently_offline_1", type="text", length=0, nullable=true)
     */
    private $currentlyOffline1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="currently_offline_2", type="text", length=0, nullable=true)
     */
    private $currentlyOffline2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="redeem_note_0", type="text", length=0, nullable=true)
     */
    private $redeemNote0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="redeem_note_1", type="text", length=0, nullable=true)
     */
    private $redeemNote1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="redeem_note_2", type="text", length=0, nullable=true)
     */
    private $redeemNote2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="listing", type="integer", nullable=true)
     */
    private $listing = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="virtual_box", type="integer", nullable=true)
     */
    private $virtualBox = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="grenzregion", type="integer", nullable=true)
     */
    private $grenzregion;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gift_for_him", type="integer", nullable=true)
     */
    private $giftForHim;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gift_for_her", type="integer", nullable=true)
     */
    private $giftForHer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gift_for_lovers", type="integer", nullable=true)
     */
    private $giftForLovers;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gift_for_two", type="integer", nullable=true)
     */
    private $giftForTwo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gift_for_kids", type="integer", nullable=true)
     */
    private $giftForKids;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gift_for_group", type="integer", nullable=true)
     */
    private $giftForGroup;

    /**
     * @var int|null
     *
     * @ORM\Column(name="gift_for_family", type="integer", nullable=true)
     */
    private $giftForFamily;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_ticket", type="boolean", nullable=false)
     */
    private $isTicket = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="bets_price", type="float", precision=10, scale=0, nullable=true)
     */
    private $betsPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="popularity_0", type="integer", nullable=false)
     */
    private $popularity0 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="popularity_1", type="integer", nullable=false)
     */
    private $popularity1 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="popularity_2", type="integer", nullable=false)
     */
    private $popularity2 = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="best_price", type="float", precision=10, scale=0, nullable=false)
     */
    private $bestPrice = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="supplier_id", type="integer", nullable=true)
     */
    private $supplierId;


}
