<?php

namespace App\GP\Domain\Entity;



/**
 * StatFirstStep
 *
 Table(name="stat_first_step")
 Entity
 */
class StatFirstStep
{
    /**
     * @var int
     *
     Column(name="ID", type="integer", nullable=false)
               */
    private $id;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $firma;

    /**
     * @var string|null
     */
    private $anrede;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $strasse;

    /**
     * @var string|null
     */
    private $postleitzahl;

    /**
     * @var string|null
     */
    private $ort;

    /**
     * @var string|null
     */
    private $land;

    /**
     * @var string|null
     */
    private $briefanrede;

    /**
     * @var int|null
     */
    private $produkte;

    /**
     * @var int|null
     */
    private $erlebnis;

    /**
     * @var int|null
     */
    private $prodduktespez;


}
