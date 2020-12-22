<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WidgetTemplates
 *
 * @ORM\Table(name="t_widget_templates")
 * @ORM\Entity
 */
class WidgetTemplates
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
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var int
     *
     * @ORM\Column(name="widget_type_id", type="integer", nullable=false)
     */
    private $widgetTypeId;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_on_desktop", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showOnDesktop = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_on_mobile", type="boolean", nullable=false)
     */
    private $showOnMobile = '0';


}
