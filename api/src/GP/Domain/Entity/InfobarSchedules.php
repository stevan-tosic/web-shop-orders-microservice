<?php

namespace App\GP\Domain\Entity;



/**
 * InfobarSchedules
 */
class InfobarSchedules
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $infobarId;

    /**
     * @var bool
     */
    private $showOnMobile = true;

    /**
     * @var bool
     */
    private $showOnDesktop = true;

    /**
     * @var \DateTime|null
     */
    private $startDate;

    /**
     * @var \DateTime|null
     */
    private $endDate;


}
