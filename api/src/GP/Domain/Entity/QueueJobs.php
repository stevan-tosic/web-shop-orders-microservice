<?php

namespace App\GP\Domain\Entity;



/**
 * QueueJobs
 */
class QueueJobs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $channel;

    /**
     * @var string
     */
    private $class;

    /**
     * @var string
     */
    private $method;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var string
     */
    private $platform = 'Gearman';

    /**
     * @var string|null
     */
    private $exchange;

    /**
     * @var int|null
     */
    private $delay = '0';

    /**
     * @var int|null
     */
    private $parallel = '1';


}
