<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TLayoutTemplates
 *
 * @ORM\Table(name="t_layout_templates")
 * @ORM\Entity
 */
class TLayoutTemplates
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
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_desktop", type="boolean", nullable=true)
     */
    private $isDesktop;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_mobile", type="boolean", nullable=true)
     */
    private $isMobile;


}
