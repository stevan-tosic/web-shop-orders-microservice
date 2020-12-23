<?php

namespace App\GP\Domain\Entity;



/**
 * Logs
 */
class Logs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tag;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \DateTime
     */
    private $timestamp = 'CURRENT_TIMESTAMP';


}
