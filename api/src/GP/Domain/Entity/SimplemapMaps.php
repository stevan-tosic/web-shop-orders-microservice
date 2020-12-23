<?php

namespace App\GP\Domain\Entity;



/**
 * SimplemapMaps
 */
class SimplemapMaps
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
    private $note;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    private $createdBy;

    private $updatedBy;


}
