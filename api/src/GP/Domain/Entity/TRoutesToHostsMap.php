<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRoutesToHostsMap
 *
 * @ORM\Table(name="t_routes_to_hosts_map")
 * @ORM\Entity
 */
class TRoutesToHostsMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="route_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $routeId;

    /**
     * @var int
     *
     * @ORM\Column(name="host_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $hostId;


}
