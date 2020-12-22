<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TOnsitePromotionLayouts
 *
 * @ORM\Table(name="t_onsite_promotion_layouts", indexes={@ORM\Index(name="t_onsite_promotion_layouts_t_onsite_promotion_types_id_fk", columns={"type_id"})})
 * @ORM\Entity
 */
class TOnsitePromotionLayouts
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="layout", type="string", length=255, nullable=true)
     */
    private $layout;

    /**
     * @var \TOnsitePromotionTypes
     *
     * @ORM\ManyToOne(targetEntity="TOnsitePromotionTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;


}
