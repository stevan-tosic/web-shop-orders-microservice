<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sysdiagrams
 *
 * @ORM\Table(name="sysdiagrams", uniqueConstraints={@ORM\UniqueConstraint(name="UK_principal_name", columns={"principal_id", "name"})})
 * @ORM\Entity
 */
class Sysdiagrams
{
    /**
     * @var int
     *
     * @ORM\Column(name="diagram_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $diagramId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=160, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="principal_id", type="integer", nullable=false)
     */
    private $principalId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="version", type="integer", nullable=true)
     */
    private $version;

    /**
     * @var string|null
     *
     * @ORM\Column(name="definition", type="blob", length=0, nullable=true)
     */
    private $definition;


}
