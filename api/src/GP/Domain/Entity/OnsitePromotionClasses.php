<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OnsitePromotionClasses
 *
 * @ORM\Table(name="t_onsite_promotion_classes")
 * @ORM\Entity
 */
class OnsitePromotionClasses
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
     * @ORM\Column(name="class", type="string", length=255, nullable=true)
     */
    private $class;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TOnsitePromotionTypes", inversedBy="class")
     * @ORM\JoinTable(name="t_onsite_promotion_classes_to_types",
     *   joinColumns={
     *     @ORM\JoinColumn(name="class_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     *   }
     * )
     */
    private $type;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->type = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
