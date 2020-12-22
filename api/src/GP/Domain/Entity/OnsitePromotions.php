<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OnsitePromotions
 *
 * @ORM\Table(name="t_onsite_promotions", indexes={@ORM\Index(name="t_onsite_promotions_t_onsite_promotion_layouts_fk", columns={"layout_id"}), @ORM\Index(name="t_onsite_promotions_t_onsite_promotion_types_id_fk", columns={"type_id"})})
 * @ORM\Entity
 */
class OnsitePromotions
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
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var int|null
     *
     * @ORM\Column(name="class_id", type="integer", nullable=true)
     */
    private $classId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="creation_user_id", type="integer", nullable=true)
     */
    private $creationUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_change_date", type="datetime", nullable=true)
     */
    private $lastChangeDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_change_user_id", type="integer", nullable=true)
     */
    private $lastChangeUserId;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_close_button", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showCloseButton = true;

    /**
     * @var int
     *
     * @ORM\Column(name="lang", type="integer", nullable=false)
     */
    private $lang = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="translation", type="string", length=255, nullable=true)
     */
    private $translation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="validity", type="integer", nullable=true)
     */
    private $validity;

    /**
     * @var \TOnsitePromotionLayouts
     *
     * @ORM\ManyToOne(targetEntity="TOnsitePromotionLayouts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="layout_id", referencedColumnName="id")
     * })
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
