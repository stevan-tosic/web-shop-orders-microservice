<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QueueJobs
 *
 * @ORM\Table(name="t_queue_jobs", uniqueConstraints={@ORM\UniqueConstraint(name="t_queue_jobs_uindex", columns={"channel"})})
 * @ORM\Entity
 */
class QueueJobs
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
     * @ORM\Column(name="channel", type="string", length=128, nullable=false)
     */
    private $channel;

    /**
     * @var string
     *
     * @ORM\Column(name="class", type="string", length=256, nullable=false)
     */
    private $class;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=256, nullable=false)
     */
    private $method;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="platform", type="string", length=255, nullable=false, options={"default"="Gearman"})
     */
    private $platform = 'Gearman';

    /**
     * @var string|null
     *
     * @ORM\Column(name="exchange", type="string", length=255, nullable=true)
     */
    private $exchange;

    /**
     * @var int|null
     *
     * @ORM\Column(name="delay", type="integer", nullable=true)
     */
    private $delay = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="parallel", type="integer", nullable=true, options={"default"="1","unsigned"=true})
     */
    private $parallel = '1';


}
