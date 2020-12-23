<?php

namespace App\GP\Domain\Entity;



/**
 * CronRuns
 */
class CronRuns
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $date;

    /**
     * @var int
     */
    private $cronId;

    /**
     * @var string|null
     */
    private $stdout;

    /**
     * @var string|null
     */
    private $stderr;

    /**
     * @var int
     */
    private $status;


}
