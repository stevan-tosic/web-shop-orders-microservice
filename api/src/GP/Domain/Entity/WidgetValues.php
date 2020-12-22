<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WidgetValues
 *
 * @ORM\Table(name="t_widget_values", indexes={@ORM\Index(name="widget_id", columns={"widget_id"}), @ORM\Index(name="widget_type_widget_value_type_id", columns={"widget_type_widget_value_type_id"})})
 * @ORM\Entity
 */
class WidgetValues
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
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=0, nullable=true)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="widget_id", type="integer", nullable=false)
     */
    private $widgetId;

    /**
     * @var int
     *
     * @ORM\Column(name="widget_type_widget_value_type_id", type="integer", nullable=false)
     */
    private $widgetTypeWidgetValueTypeId;


}
