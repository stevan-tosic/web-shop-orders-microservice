<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TContestEntries
 *
 * @ORM\Table(name="t_contest_entries")
 * @ORM\Entity
 */
class TContestEntries
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
     * @var int
     *
     * @ORM\Column(name="contest_id", type="integer", nullable=false)
     */
    private $contestId;

    /**
     * @var int
     *
     * @ORM\Column(name="host_id", type="integer", nullable=false)
     */
    private $hostId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;


}
