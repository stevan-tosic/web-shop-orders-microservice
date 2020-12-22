<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TLinklistsHosts
 *
 * @ORM\Table(name="t_linklists_hosts")
 * @ORM\Entity
 */
class TLinklistsHosts
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
     * @ORM\Column(name="host_id", type="integer", nullable=false)
     */
    private $hostId;

    /**
     * @var int
     *
     * @ORM\Column(name="linklist_id", type="integer", nullable=false)
     */
    private $linklistId;


}
