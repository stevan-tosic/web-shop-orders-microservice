<?php

namespace App\GP\Domain\Entity;



/**
 * OnsitePromotions
 */
class OnsitePromotions
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
     * @var int|null
     */
    private $classId;

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

    /**
     * @var string|null
     */
    private $translation;

    /**
     * @var int|null
     */
    private $validity;

    private $layout;

    /**
     * @var \TOnsitePromotionTypes
     *
               *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;


}
