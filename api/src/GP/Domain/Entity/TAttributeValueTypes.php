<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAttributeValueTypes
 *
 * @ORM\Table(name="t_attribute_value_types", indexes={@ORM\Index(name="FK_t_attribute_type_t_attribute_type_fields", columns={"attribute_type_field_id"})})
 * @ORM\Entity
 */
class TAttributeValueTypes
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
     * @var string
     *
     * @ORM\Column(name="title_0", type="string", length=50, nullable=false)
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
     * @var \TAttributeTypeFields
     *
     * @ORM\ManyToOne(targetEntity="TAttributeTypeFields")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attribute_type_field_id", referencedColumnName="ID")
     * })
     */
    private $attributeTypeField;


}
