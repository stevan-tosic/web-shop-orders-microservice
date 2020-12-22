<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TQueueDelayedMessages
 *
 * @ORM\Table(name="t_queue_delayed_messages")
 * @ORM\Entity
 */
class TQueueDelayedMessages
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
     * @var string
     *
     * @ORM\Column(name="channel", type="string", length=100, nullable=false)
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="payload", type="text", length=0, nullable=false)
     */
    private $payload;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_check", type="datetime", nullable=true)
     */
    private $lastCheck;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="queued", type="datetime", nullable=true)
     */
    private $queued;

    /**
     * @var string
     *
     * @ORM\Column(name="hash", type="string", length=32, nullable=false, options={"fixed"=true})
     */
    private $hash;


}
