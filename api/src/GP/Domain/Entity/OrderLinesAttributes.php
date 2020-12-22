<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderLinesAttributes
 *
 * @ORM\Table(name="t_order_lines_attributes", indexes={@ORM\Index(name="FK__t_order_l__attri__02333863", columns={"attribute_value_id"}), @ORM\Index(name="t_order_lines_attributes_cart_line_id_index", columns={"cart_line_id"})})
 * @ORM\Entity
 */
class OrderLinesAttributes
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
     * @var int|null
     *
     * @ORM\Column(name="order_lines_id", type="integer", nullable=true)
     */
    private $orderLinesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var int|null
     *
     * @ORM\Column(name="attribute_id", type="integer", nullable=true)
     */
    private $attributeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cart_line_id", type="integer", nullable=true)
     */
    private $cartLineId;

    /**
     * @var \TAttributeValues
     *
     * @ORM\ManyToOne(targetEntity="TAttributeValues")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attribute_value_id", referencedColumnName="ID")
     * })
     */
    private $attributeValue;


}
