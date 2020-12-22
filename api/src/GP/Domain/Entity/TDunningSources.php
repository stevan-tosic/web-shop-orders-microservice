<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDunningSources
 *
 * @ORM\Table(name="t_dunning_sources", uniqueConstraints={@ORM\UniqueConstraint(name="acronym", columns={"acronym"})})
 * @ORM\Entity
 */
class TDunningSources
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
     * @ORM\Column(name="acronym", type="string", length=255, nullable=true)
     */
    private $acronym;


}
