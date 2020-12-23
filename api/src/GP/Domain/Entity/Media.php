<?php

namespace App\GP\Domain\Entity;



/**
 * Media
 */
class Media
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $path;

    /**
     * @var int
     */
    private $mediaTypeId;

    /**
     * @var string|null
     */
    private $slug;

    /**
     * @var int
     */
    private $fileTypeId;

    /**
     * @var \DateTime|null
     */
    private $creationDate;

    /**
     * @var int
     */
    private $creationUserId;

    /**
     * @var string|null
     */
    private $filename;


}
