<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRouteDispatchers
 *
 * @ORM\Table(name="t_route_dispatchers")
 * @ORM\Entity
 */
class TRouteDispatchers
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="class_name", type="string", length=255, nullable=true)
     */
    private $className;


}