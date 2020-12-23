<?php

namespace App\GP\Domain\Entity;



/**
 * ExternalApis
 */
class ExternalApis
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $username;

    /**
     * @var string|null
     */
    private $password;

    /**
     * @var string|null
     */
    private $externalId;

    /**
     * @var string|null
     */
    private $token;

    private $hostGroup;

    private $partner;


}
