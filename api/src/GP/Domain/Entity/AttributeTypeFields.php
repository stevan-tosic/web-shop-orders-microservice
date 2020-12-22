<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AttributeTypeFields
 *
 * @ORM\Table(name="t_attribute_type_fields")
 * @ORM\Entity
 */
class AttributeTypeFields
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
     * @ORM\Column(name="field_type", type="string", length=255, nullable=true)
     */
    private $fieldType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="has_preview", type="boolean", nullable=true)
     */
    private $hasPreview;


}
