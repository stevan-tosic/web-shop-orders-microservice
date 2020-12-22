<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TChangeSets
 *
 * @ORM\Table(name="t_change_sets", indexes={@ORM\Index(name="FK_version_id", columns={"version_id"})})
 * @ORM\Entity
 */
class TChangeSets
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
     * @ORM\Column(name="target_table", type="string", length=120, nullable=false)
     */
    private $targetTable;

    /**
     * @var string
     *
     * @ORM\Column(name="target_field", type="string", length=120, nullable=false)
     */
    private $targetField;

    /**
     * @var string
     *
     * @ORM\Column(name="target_value", type="string", length=8000, nullable=false)
     */
    private $targetValue;

    /**
     * @var string
     *
     * @ORM\Column(name="identity_field", type="string", length=120, nullable=false)
     */
    private $identityField;

    /**
     * @var string
     *
     * @ORM\Column(name="identity_value", type="string", length=8000, nullable=false)
     */
    private $identityValue;

    /**
     * @var \TChangeVersions
     *
     * @ORM\ManyToOne(targetEntity="TChangeVersions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="version_id", referencedColumnName="id")
     * })
     */
    private $version;


}
