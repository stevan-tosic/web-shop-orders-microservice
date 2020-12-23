<?php

namespace App\GP\Domain\Entity;



/**
 * Wettbewerb
 */
class Wettbewerb
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $antwort = '0';

    /**
     * @var string|null
     */
    private $vorname;

    /**
     * @var string|null
     */
    private $nachname;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var int|null
     */
    private $newsletter = '0';


}
