<?php

namespace App\GP\Domain\Entity;



/**
 * ChangeSets
 */
class ChangeSets
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $targetTable;

    /**
     * @var string
     */
    private $targetField;

    /**
     * @var string
     */
    private $targetValue;

    /**
     * @var string
     */
    private $identityField;

    /**
     * @var string
     */
    private $identityValue;

    private $version;


}
