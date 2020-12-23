<?php

namespace App\GP\Domain\Entity;



/**
 * Logins
 */
class Logins
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $login;

    /**
     * @var string|null
     */
    private $password;

    /**
     * @var int|null
     */
    private $type = '0';


}
