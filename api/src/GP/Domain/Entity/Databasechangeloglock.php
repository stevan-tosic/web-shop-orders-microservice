<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Databasechangeloglock
 *
 * @ORM\Table(name="DATABASECHANGELOGLOCK")
 * @ORM\Entity
 */
class Databasechangeloglock
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="LOCKED", type="boolean", nullable=false)
     */
    private $locked;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LOCKGRANTED", type="datetime", nullable=true)
     */
    private $lockgranted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOCKEDBY", type="string", length=255, nullable=true)
     */
    private $lockedby;


}
