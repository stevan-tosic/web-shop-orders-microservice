<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetailoSftpcurrentnumber
 *
 * @ORM\Table(name="t_retailo_sftpcurrentnumber")
 * @ORM\Entity
 */
class RetailoSftpcurrentnumber
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
     * @var int|null
     *
     * @ORM\Column(name="sftpCurrentNumber", type="integer", nullable=true)
     */
    private $sftpcurrentnumber;


}
