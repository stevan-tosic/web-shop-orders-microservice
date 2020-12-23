<?php

namespace App\GP\Domain\Entity;



/**
 * DunningHistory
 */
class DunningHistory
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
     * @var int|null
     */
    private $isRunning = '0';

    /**
     * @var string|null
     */
    private $printer;

    /**
     * @var \DateTime|null
     */
    private $runningUpdatedAt;

    private $user;

    /**
     * @var \TDunningSources
     *
               *   @ORM\JoinColumn(name="dunning_source_id", referencedColumnName="id")
     * })
     */
    private $dunningSource;


}
