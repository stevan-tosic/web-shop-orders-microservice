<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CronRuns
 *
 * @ORM\Table(name="t_cron_runs")
 * @ORM\Entity
 */
class CronRuns
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="cron_id", type="integer", nullable=false)
     */
    private $cronId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stdout", type="text", length=0, nullable=true)
     */
    private $stdout;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stderr", type="text", length=0, nullable=true)
     */
    private $stderr;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;


}
