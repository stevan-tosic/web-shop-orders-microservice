<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriesNew
 *
 * @ORM\Table(name="t_categories_new", indexes={@ORM\Index(name="t_categories_new_category_group_id_index", columns={"category_group_id"})})
 * @ORM\Entity
 */
class CategoriesNew
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
     * @ORM\Column(name="category_group_id", type="integer", nullable=true)
     */
    private $categoryGroupId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="host_id", type="integer", nullable=true)
     */
    private $hostId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle", type="string", length=255, nullable=true)
     */
    private $subtitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_text_short", type="text", length=0, nullable=true)
     */
    private $seoTextShort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_text_long", type="text", length=0, nullable=true)
     */
    private $seoTextLong;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_category", type="string", length=255, nullable=true)
     */
    private $googleCategory;

    /**
     * @var int
     *
     * @ORM\Column(name="category_status_id", type="integer", nullable=false, options={"default"="1"})
     */
    private $categoryStatusId = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="redirect_target", type="string", length=255, nullable=true)
     */
    private $redirectTarget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="siroop_category", type="string", length=255, nullable=true)
     */
    private $siroopCategory;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TMetaKeywords", inversedBy="category")
     * @ORM\JoinTable(name="t_meta_keywords_to_categories_map",
     *   joinColumns={
     *     @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="keyword_id", referencedColumnName="id")
     *   }
     * )
     */
    private $keyword;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->keyword = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
