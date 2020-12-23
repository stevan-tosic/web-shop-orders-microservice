<?php

namespace App\GP\Domain\Entity;



/**
 * PublicHolidays
 */
class PublicHolidays
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var \DateTime|null
     */
    private $date;

    /**
     * @var int|null
     */
    private $hourStart;

    /**
     * @var int|null
     */
    private $hourEnd;

    /**
     * @var int
     */
    private $publicHolidayGroupId;


}
