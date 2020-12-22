<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DunningTypes
 *
 * @ORM\Table(name="t_dunning_types", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})})
 * @ORM\Entity
 */
class DunningTypes
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
     * @var string|null
     *
     * @ORM\Column(name="className", type="string", length=255, nullable=true)
     */
    private $classname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TDunningSteps", mappedBy="dunningType")
     */
    private $step;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->step = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
