<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wettbewerb
 *
 * @ORM\Table(name="t_wettbewerb")
 * @ORM\Entity
 */
class Wettbewerb
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
     * @ORM\Column(name="antwort", type="integer", nullable=true)
     */
    private $antwort = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vorname", type="string", length=50, nullable=true)
     */
    private $vorname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nachname", type="string", length=50, nullable=true)
     */
    private $nachname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var int|null
     *
     * @ORM\Column(name="newsletter", type="integer", nullable=true)
     */
    private $newsletter = '0';


}
