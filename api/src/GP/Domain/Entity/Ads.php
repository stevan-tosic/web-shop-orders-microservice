<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ads
 *
 * @ORM\Table(name="t_ads")
 * @ORM\Entity
 */
class Ads
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
     * @ORM\Column(name="cat_id", type="integer", nullable=true)
     */
    private $catId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ads_position_id", type="integer", nullable=true)
     */
    private $adsPositionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_id", type="integer", nullable=true)
     */
    private $productId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="language_nr", type="integer", nullable=true)
     */
    private $languageNr;


}
