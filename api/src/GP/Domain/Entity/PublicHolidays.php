<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicHolidays
 *
 * @ORM\Table(name="t_public_holidays")
 * @ORM\Entity
 */
class PublicHolidays
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hour_start", type="integer", nullable=true)
     */
    private $hourStart;

    /**
     * @var int|null
     *
     * @ORM\Column(name="hour_end", type="integer", nullable=true)
     */
    private $hourEnd;

    /**
     * @var int
     *
     * @ORM\Column(name="public_holiday_group_id", type="integer", nullable=false)
     */
    private $publicHolidayGroupId;


}
