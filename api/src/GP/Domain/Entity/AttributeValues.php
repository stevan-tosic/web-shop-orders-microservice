<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AttributeValues
 *
 * @ORM\Table(name="t_attribute_values", indexes={@ORM\Index(name="FK_t_attribute_t_attribute_type", columns={"attribute_type_id"})})
 * @ORM\Entity
 */
class AttributeValues
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
     * @ORM\Column(name="value_0", type="string", length=50, nullable=true)
     */
    private $value0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_1", type="string", length=50, nullable=true)
     */
    private $value1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value_2", type="string", length=50, nullable=true)
     */
    private $value2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_value", type="string", length=255, nullable=true)
     */
    private $customValue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="custom_value_2", type="string", length=255, nullable=true)
     */
    private $customValue2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_length", type="integer", nullable=true)
     */
    private $maxLength;

    /**
     * @var \TAttributeValueTypes
     *
     * @ORM\ManyToOne(targetEntity="TAttributeValueTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attribute_type_id", referencedColumnName="ID")
     * })
     */
    private $attributeType;


}
