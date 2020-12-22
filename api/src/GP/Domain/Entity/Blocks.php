<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blocks
 *
 * @ORM\Table(name="blocks")
 * @ORM\Entity
 */
class Blocks
{
    /**
     * @var int
     *
     * @ORM\Column(name="startIpNum", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $startipnum;

    /**
     * @var int|null
     *
     * @ORM\Column(name="endIpNum", type="integer", nullable=true)
     */
    private $endipnum;

    /**
     * @var int|null
     *
     * @ORM\Column(name="locId", type="integer", nullable=true)
     */
    private $locid;


}
