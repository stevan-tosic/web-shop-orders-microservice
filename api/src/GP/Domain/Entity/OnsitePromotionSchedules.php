<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OnsitePromotionSchedules
 *
 * @ORM\Table(name="t_onsite_promotion_schedules", indexes={@ORM\Index(name="t_onsite_promotion_schedules_id_fk", columns={"promotion_id"})})
 * @ORM\Entity
 */
class OnsitePromotionSchedules
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
     * @var bool
     *
     * @ORM\Column(name="show_on_mobile", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showOnMobile = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_on_desktop", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showOnDesktop = true;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @var \TOnsitePromotions
     *
     * @ORM\ManyToOne(targetEntity="TOnsitePromotions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="promotion_id", referencedColumnName="id")
     * })
     */
    private $promotion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TArticleType", inversedBy="schedule")
     * @ORM\JoinTable(name="t_onsite_promotion_schedule_article_type_map",
     *   joinColumns={
     *     @ORM\JoinColumn(name="schedule_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="article_type_id", referencedColumnName="ID")
     *   }
     * )
     */
    private $articleType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TDropshippingPartners", inversedBy="schedule")
     * @ORM\JoinTable(name="t_onsite_promotion_schedule_dropshipper_map",
     *   joinColumns={
     *     @ORM\JoinColumn(name="schedule_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="dropshipper_id", referencedColumnName="ID")
     *   }
     * )
     */
    private $dropshipper;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articleType = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dropshipper = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
