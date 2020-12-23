<?php

namespace App\GP\Domain\Entity;



/**
 * CancellationStatus
 */
class CancellationStatus
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var bool|null
     */
    private $requireComment = true;

    /**
     * @var bool|null
     */
    private $isCancellation = true;

    private $createdBy;

    private $updatedBy;


}
