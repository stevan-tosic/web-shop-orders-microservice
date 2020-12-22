<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TConnex
 *
 * @ORM\Table(name="t_connex", uniqueConstraints={@ORM\UniqueConstraint(name="IX_t_connex_serial", columns={"serial"})})
 * @ORM\Entity
 */
class TConnex
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
     * @ORM\Column(name="serial", type="string", length=50, nullable=true)
     */
    private $serial;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_1", type="string", length=50, nullable=true)
     */
    private $code1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_2", type="string", length=50, nullable=true)
     */
    private $code2;


}
