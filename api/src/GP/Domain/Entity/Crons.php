<?php

namespace App\GP\Domain\Entity;



/**
 * Crons
 */
class Crons
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var int
     */
    private $creationUserId;

    /**
     * @var \DateTime|null
     */
    private $lastChangeDate;

    /**
     * @var int|null
     */
    private $lastChangeUserId;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $controller;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string|null
     */
    private $cronPattern;


}
