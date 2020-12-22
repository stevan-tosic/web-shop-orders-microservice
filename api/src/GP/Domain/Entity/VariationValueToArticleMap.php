<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VariationValueToArticleMap
 *
 * @ORM\Table(name="t_variation_value_to_article_map", indexes={@ORM\Index(name="article_id_index", columns={"article_id"})})
 * @ORM\Entity
 */
class VariationValueToArticleMap
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
     * @ORM\Column(name="article_id", type="integer", nullable=true)
     */
    private $articleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value_id", type="integer", nullable=true)
     */
    private $valueId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="variation_to_type_map_id", type="integer", nullable=true)
     */
    private $variationToTypeMapId;

    /**
     * @var bool
     *
     * @ORM\Column(name="sort_order", type="boolean", nullable=false, options={"default"="1"})
     */
    private $sortOrder = true;


}
