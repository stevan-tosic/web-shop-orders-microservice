<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDunningHistory
 *
 * @ORM\Table(name="t_dunning_history", indexes={@ORM\Index(name="dunning_history_user_id_idx", columns={"user_id"}), @ORM\Index(name="t_dunning_sources_id_fk", columns={"dunning_source_id"})})
 * @ORM\Entity
 */
class TDunningHistory
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
     * @var int|null
     *
     * @ORM\Column(name="is_running", type="integer", nullable=true)
     */
    private $isRunning = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="printer", type="string", length=50, nullable=true)
     */
    private $printer;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="running_updated_at", type="datetime", nullable=true)
     */
    private $runningUpdatedAt;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \TDunningSources
     *
     * @ORM\ManyToOne(targetEntity="TDunningSources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dunning_source_id", referencedColumnName="id")
     * })
     */
    private $dunningSource;


}
