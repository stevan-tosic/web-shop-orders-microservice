<?php

namespace App\GP\Domain\Entity;



/**
 * Log
 */
class Log
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $logDate;

    /**
     * @var string|null
     */
    private $source;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var string|null
     */
    private $message;


}
