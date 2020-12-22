<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LinklistsPositions
 *
 * @ORM\Table(name="t_linklists_positions", uniqueConstraints={@ORM\UniqueConstraint(name="UQ__t_linkli__32DD1E4CCFFE09A8", columns={"slug"})})
 * @ORM\Entity
 */
class LinklistsPositions
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
     * @ORM\Column(name="slug", type="string", length=20, nullable=false)
     */
    private $slug;


}
