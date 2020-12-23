<?php

namespace App\GP\Domain\Entity;



/**
 * QueueDelayedMessages
 */
class QueueDelayedMessages
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
    private $payload;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime|null
     */
    private $lastCheck;

    /**
     * @var \DateTime|null
     */
    private $queued;

    /**
     * @var string
     */
    private $hash;


}
