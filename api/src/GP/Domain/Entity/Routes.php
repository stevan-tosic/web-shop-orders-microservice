<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Routes
 *
 * @ORM\Table(name="t_routes")
 * @ORM\Entity
 */
class Routes
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
     * @ORM\Column(name="pattern", type="string", length=255, nullable=true)
     */
    private $pattern;

    /**
     * @var string|null
     *
     * @ORM\Column(name="namespace", type="string", length=255, nullable=true)
     */
    private $namespace;

    /**
     * @var int
     *
     * @ORM\Column(name="matcher_id", type="integer", nullable=false)
     */
    private $matcherId;

    /**
     * @var int
     *
     * @ORM\Column(name="dispatcher_id", type="integer", nullable=false)
     */
    private $dispatcherId;


}
