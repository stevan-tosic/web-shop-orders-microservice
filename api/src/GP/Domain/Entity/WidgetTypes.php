<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WidgetTypes
 *
 * @ORM\Table(name="t_widget_types", indexes={@ORM\Index(name="name_index", columns={"name"})})
 * @ORM\Entity
 */
class WidgetTypes
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_list", type="boolean", nullable=true)
     */
    private $isList;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_top_level", type="boolean", nullable=true)
     */
    private $isTopLevel;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_on_desktop", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showOnDesktop = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_on_mobile", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showOnMobile = true;


}
