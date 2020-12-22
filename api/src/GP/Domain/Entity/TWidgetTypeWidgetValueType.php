<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TWidgetTypeWidgetValueType
 *
 * @ORM\Table(name="t_widget_type_widget_value_type", indexes={@ORM\Index(name="widget_type_id_index", columns={"widget_type_id"}), @ORM\Index(name="widget_value_type_id", columns={"widget_value_type_id"})})
 * @ORM\Entity
 */
class TWidgetTypeWidgetValueType
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
     * @ORM\Column(name="widget_value_type_id", type="integer", nullable=false)
     */
    private $widgetValueTypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="widget_type_id", type="integer", nullable=false)
     */
    private $widgetTypeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true)
     */
    private $sortOrder;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_order_admin", type="integer", nullable=true)
     */
    private $sortOrderAdmin;


}
