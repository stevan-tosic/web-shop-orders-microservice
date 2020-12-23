<?php

namespace App\GP\Domain\Entity;



/**
 * asks
 */
class Tasks
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \DateTime|null
     */
    private $startDate;

    /**
     * @var bool
     */
    private $priority;

    /**
     * @var \DateTime
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

}
