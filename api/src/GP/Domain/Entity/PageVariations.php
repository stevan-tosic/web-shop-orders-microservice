<?php

namespace App\GP\Domain\Entity;



/**
 * PageVariations
 */
class PageVariations
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $creationDate;

    /**
     * @var int
     */
    private $creationUserId;

    /**
     * @var int
     */
    private $lastChangeUserId;

    /**
     * @var \DateTime|null
     */
    private $lastChangeDate;

    /**
     * @var int|null
     */
    private $activeVersionId;

    /**
     * @var int
     */
    private $hostId;

    /**
     * @var string|null
     */
    private $slug;

    /**
     * @var int
     */
    private $pageId;


}
