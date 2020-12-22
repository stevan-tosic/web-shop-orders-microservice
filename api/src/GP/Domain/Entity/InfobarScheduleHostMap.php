<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfobarScheduleHostMap
 *
 * @ORM\Table(name="t_infobar_schedule_host_map")
 * @ORM\Entity
 */
class InfobarScheduleHostMap
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
     * @var int|null
     *
     * @ORM\Column(name="schedule_id", type="integer", nullable=true)
     */
    private $scheduleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="host_id", type="integer", nullable=true)
     */
    private $hostId;


}
