<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryGroupToArticleMap
 *
 * @ORM\Table(name="t_category_group_to_article_map", indexes={@ORM\Index(name="category_group_id", columns={"category_group_id"}), @ORM\Index(name="t_category_group_to_article_map_article_id_index", columns={"article_id"})})
 * @ORM\Entity
 */
class CategoryGroupToArticleMap
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
     * @ORM\Column(name="host_group_id", type="integer", nullable=true)
     */
    private $hostGroupId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true)
     */
    private $sortOrder;

    /**
     * @var \TArticles
     *
     * @ORM\ManyToOne(targetEntity="TArticles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * })
     */
    private $article;

    /**
     * @var \TCategoryGroups
     *
     * @ORM\ManyToOne(targetEntity="TCategoryGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_group_id", referencedColumnName="id")
     * })
     */
    private $categoryGroup;


}
