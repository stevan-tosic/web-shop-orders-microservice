<?php

namespace App\GP\Domain\Entity;



/**
 * Databasechangeloglock
 */
class Databasechangeloglock
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $locked;

    /**
     * @var \DateTime|null
     */
    private $lockgranted;

    /**
     * @var string|null
     */
    private $lockedby;


}
