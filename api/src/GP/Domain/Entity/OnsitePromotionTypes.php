<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OnsitePromotionTypes
 *
 * @ORM\Table(name="t_onsite_promotion_types")
 * @ORM\Entity
 */
class OnsitePromotionTypes
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="strategy", type="string", length=45, nullable=false)
     */
    private $strategy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TOnsitePromotionClasses", mappedBy="type")
     */
    private $class;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->class = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
