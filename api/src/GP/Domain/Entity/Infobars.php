<?php

namespace App\GP\Domain\Entity;



/**
 * Infobars
 */
class Infobars
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
    private $text;

    /**
     * @var string|null
     */
    private $layout;

    /**
     * @var int
     */
    private $classId;

    /**
     * @var int
     */
    private $typeId;

    /**
     * @var \DateTime|null
     */
    private $creationDate;

    /**
     * @var int|null
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
     * @var bool
     */
    private $showCloseButton = true;

    /**
     * @var int
     */
    private $lang = '0';


}
