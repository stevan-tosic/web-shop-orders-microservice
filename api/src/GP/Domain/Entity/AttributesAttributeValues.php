<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AttributesAttributeValues
 *
 * @ORM\Table(name="t_attributes_attribute_values", indexes={@ORM\Index(name="attribute_id_index", columns={"attribute_id"}), @ORM\Index(name="attribute_value_id_index", columns={"attribute_value_id"})})
 * @ORM\Entity
 */
class AttributesAttributeValues
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
     * @ORM\Column(name="attribute_id", type="integer", nullable=false)
     */
    private $attributeId;

    /**
     * @var int
     *
     * @ORM\Column(name="attribute_value_id", type="integer", nullable=false)
     */
    private $attributeValueId;


}
