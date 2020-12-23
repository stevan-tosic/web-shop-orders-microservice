<?php

namespace App\GP\Domain\Entity;



/**
 * Routes
 */
class Routes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $pattern;

    /**
     * @var string|null
     */
    private $namespace;

    /**
     * @var int
     */
    private $matcherId;

    /**
     * @var int
     */
    private $dispatcherId;


}
