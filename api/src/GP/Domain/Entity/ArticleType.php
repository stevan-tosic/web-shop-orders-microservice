<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleType
 *
 * @ORM\Table(name="t_article_type", uniqueConstraints={@ORM\UniqueConstraint(name="t_article_type_short_uindex", columns={"short"})}, indexes={@ORM\Index(name="t_article_type_to_group_id_fk", columns={"group_id"})})
 * @ORM\Entity
 */
class ArticleType
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
     * @var string|null
     *
     * @ORM\Column(name="short", type="string", length=8, nullable=true, options={"fixed"=true})
     */
    private $short;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_0", type="string", length=50, nullable=true)
     */
    private $title0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_1", type="string", length=50, nullable=true)
     */
    private $title1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_2", type="string", length=50, nullable=true)
     */
    private $title2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_shipping_status", type="integer", nullable=true)
     */
    private $defaultShippingStatus;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="printing_bill", type="boolean", nullable=true)
     */
    private $printingBill;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true, options={"default"="1111"})
     */
    private $sortOrder = '1111';

    /**
     * @var bool
     *
     * @ORM\Column(name="cho_enabled", type="boolean", nullable=false)
     */
    private $choEnabled = '0';

    /**
     * @var \TArticleTypeGroup
     *
     * @ORM\ManyToOne(targetEntity="TArticleTypeGroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="group_id", referencedColumnName="id")
     * })
     */
    private $group;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TOnsitePromotionSchedules", mappedBy="articleType")
     */
    private $schedule;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schedule = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
