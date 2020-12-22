<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfobarSchedules
 *
 * @ORM\Table(name="t_infobar_schedules")
 * @ORM\Entity
 */
class InfobarSchedules
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
     * @ORM\Column(name="infobar_id", type="integer", nullable=true)
     */
    private $infobarId;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_on_mobile", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showOnMobile = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_on_desktop", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showOnDesktop = true;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=true)
     */
    private $endDate;


}
