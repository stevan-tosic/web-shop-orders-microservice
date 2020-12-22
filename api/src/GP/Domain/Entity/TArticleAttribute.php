<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TArticleAttribute
 *
 * @ORM\Table(name="t_article_attribute", indexes={@ORM\Index(name="article_id_index", columns={"article_id"}), @ORM\Index(name="attribute_id_index", columns={"attribute_id"})})
 * @ORM\Entity
 */
class TArticleAttribute
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
     * @var \TArticleV1
     *
     * @ORM\ManyToOne(targetEntity="TArticleV1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="ID")
     * })
     */
    private $article;

    /**
     * @var \TAttributeValues
     *
     * @ORM\ManyToOne(targetEntity="TAttributeValues")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attribute_id", referencedColumnName="ID")
     * })
     */
    private $attribute;


}
