<?php

namespace App\GP\Domain\Entity;



/**
 * LogsCache
 */
class LogsCache
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $sourceType;

    /**
     * @var int
     */
    private $sourceId;

    /**
     * @var string
     */
    private $itemType;

    /**
     * @var int
     */
    private $itemId;

    /**
     * @var int
     */
    private $state;

    /**
     * @var \DateTime
     */
    private $createdAt;


}
