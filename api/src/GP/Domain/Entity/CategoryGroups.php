<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryGroups
 *
 * @ORM\Table(name="t_category_groups", indexes={@ORM\Index(name="t_category_groups_parent_id_index", columns={"parent_id"}), @ORM\Index(name="t_category_groups_t_prediggo_filter_templates_id_fk", columns={"filter_template_id"})})
 * @ORM\Entity
 */
class CategoryGroups
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
     * @var int|null
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="host_group_id", type="integer", nullable=true)
     */
    private $hostGroupId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="page_id", type="integer", nullable=true)
     */
    private $pageId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true)
     */
    private $sortOrder;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_google_shopping", type="boolean", nullable=true)
     */
    private $isGoogleShopping;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_siroop", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isSiroop = true;

    /**
     * @var float
     *
     * @ORM\Column(name="total_revenue", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalRevenue = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="redeemed_revenue", type="float", precision=10, scale=0, nullable=false)
     */
    private $redeemedRevenue = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=6, nullable=true)
     */
    private $color = '';

    /**
     * @var \TPrediggoFilterTemplates
     *
     * @ORM\ManyToOne(targetEntity="TPrediggoFilterTemplates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="filter_template_id", referencedColumnName="id")
     * })
     */
    private $filterTemplate;


}
