<?php

namespace App\GP\Domain\Entity;



/**
 * Taxes
 */
class Taxes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $title0;

    /**
     * @var string|null
     */
    private $title1;

    /**
     * @var string|null
     */
    private $title2;

    /**
     * @var float|null
     */
    private $tax;

    /**
     * @var int|null
     */
    private $typeId;

    /**
     * @var \DateTime|null
     */
    private $expirationDate;

    /**
     * @var string|null
     */
    private $label;


}
