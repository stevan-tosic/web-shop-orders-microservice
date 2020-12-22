<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatFirstStep
 *
 * @ORM\Table(name="stat_first_step")
 * @ORM\Entity
 */
class StatFirstStep
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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Firma", type="string", length=255, nullable=true)
     */
    private $firma;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Anrede", type="string", length=255, nullable=true)
     */
    private $anrede;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Strasse", type="string", length=255, nullable=true)
     */
    private $strasse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Postleitzahl", type="string", length=255, nullable=true)
     */
    private $postleitzahl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ort", type="string", length=255, nullable=true)
     */
    private $ort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Land", type="string", length=255, nullable=true)
     */
    private $land;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Briefanrede", type="string", length=255, nullable=true)
     */
    private $briefanrede;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Produkte", type="integer", nullable=true)
     */
    private $produkte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="Erlebnis", type="integer", nullable=true)
     */
    private $erlebnis;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ProddukteSpez", type="integer", nullable=true)
     */
    private $prodduktespez;


}
