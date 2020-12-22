<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vat
 *
 * @ORM\Table(name="t_vat")
 * @ORM\Entity
 */
class Vat
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
     * @ORM\Column(name="title_0", type="string", length=100, nullable=true)
     */
    private $title0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_1", type="string", length=100, nullable=true)
     */
    private $title1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_2", type="string", length=100, nullable=true)
     */
    private $title2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="value", type="integer", nullable=true)
     */
    private $value;


}
