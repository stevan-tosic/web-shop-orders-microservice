<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TIntegrationParameters
 *
 * @ORM\Table(name="t_integration_parameters")
 * @ORM\Entity
 */
class TIntegrationParameters
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
     * @ORM\Column(name="name", type="string", length=256, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=1024, nullable=false)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="target_id", type="integer", nullable=false)
     */
    private $targetId;


}
