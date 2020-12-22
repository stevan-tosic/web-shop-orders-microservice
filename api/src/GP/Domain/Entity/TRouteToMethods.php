<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRouteToMethods
 *
 * @ORM\Table(name="t_route_to_methods")
 * @ORM\Entity
 */
class TRouteToMethods
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
     * @var int
     *
     * @ORM\Column(name="route_id", type="integer", nullable=false)
     */
    private $routeId;

    /**
     * @var int
     *
     * @ORM\Column(name="route_method_id", type="integer", nullable=false)
     */
    private $routeMethodId;


}
