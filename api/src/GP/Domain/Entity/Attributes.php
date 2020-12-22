<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Attributes
 *
 * @ORM\Table(name="t_attributes", indexes={@ORM\Index(name="article_id_index", columns={"article_id"})})
 * @ORM\Entity
 */
class Attributes
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
     * @var int
     *
     * @ORM\Column(name="article_id", type="integer", nullable=false)
     */
    private $articleId;

    /**
     * @var int
     *
     * @ORM\Column(name="attribute_value_type_id", type="integer", nullable=false)
     */
    private $attributeValueTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_0", type="string", length=255, nullable=true)
     */
    private $name0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_1", type="string", length=255, nullable=true)
     */
    private $name1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_2", type="string", length=255, nullable=true)
     */
    private $name2;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_required", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isRequired = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_value", type="string", length=255, nullable=true)
     */
    private $defaultValue;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_preview", type="boolean", nullable=true)
     */
    private $hasPreview;


}
