<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TWidgetSubTypes
 *
 * @ORM\Table(name="t_widget_sub_types")
 * @ORM\Entity
 */
class TWidgetSubTypes
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
     * @ORM\Column(name="main_widget_type_id", type="integer", nullable=false)
     */
    private $mainWidgetTypeId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_required", type="boolean", nullable=true)
     */
    private $isRequired;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true)
     */
    private $sortOrder;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="sub_widget_type_id", type="integer", nullable=false)
     */
    private $subWidgetTypeId;


}
