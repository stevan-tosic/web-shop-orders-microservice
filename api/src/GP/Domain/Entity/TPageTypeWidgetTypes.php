<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPageTypeWidgetTypes
 *
 * @ORM\Table(name="t_page_type_widget_types")
 * @ORM\Entity
 */
class TPageTypeWidgetTypes
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
     * @var int|null
     *
     * @ORM\Column(name="page_type_id", type="integer", nullable=true)
     */
    private $pageTypeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="widget_type_id", type="integer", nullable=true)
     */
    private $widgetTypeId;


}
