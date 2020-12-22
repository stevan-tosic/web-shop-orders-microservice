<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TBoxStatus
 *
 * @ORM\Table(name="t_box_status")
 * @ORM\Entity
 */
class TBoxStatus
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
     * @var string|null
     *
     * @ORM\Column(name="boxStatus", type="string", length=50, nullable=true)
     */
    private $boxstatus;


}
