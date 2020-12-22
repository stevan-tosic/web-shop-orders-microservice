<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TSimplemapStates
 *
 * @ORM\Table(name="t_simplemap_states", indexes={@ORM\Index(name="t_simplemap_states_t_geo_states_id_fk", columns={"state_id"})})
 * @ORM\Entity
 */
class TSimplemapStates
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
     * @ORM\Column(name="code", type="string", length=10, nullable=true)
     */
    private $code;

    /**
     * @var int|null
     *
     * @ORM\Column(name="x_position", type="integer", nullable=true)
     */
    private $xPosition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="y_position", type="integer", nullable=true)
     */
    private $yPosition;

    /**
     * @var int|null
     *
     * @ORM\Column(name="x2_position", type="integer", nullable=true)
     */
    private $x2Position;

    /**
     * @var int|null
     *
     * @ORM\Column(name="y2_position", type="integer", nullable=true)
     */
    private $y2Position;

    /**
     * @var string|null
     *
     * @ORM\Column(name="area", type="text", length=65535, nullable=true)
     */
    private $area;

    /**
     * @var \TGeoStates
     *
     * @ORM\ManyToOne(targetEntity="TGeoStates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_id", referencedColumnName="id")
     * })
     */
    private $state;


}
