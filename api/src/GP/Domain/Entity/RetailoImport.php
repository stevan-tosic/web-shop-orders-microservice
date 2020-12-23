<?php

namespace App\GP\Domain\Entity;



/**
 * RetailoImport
 */
class RetailoImport
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $readinglines = '0';

    /**
     * @var int|null
     */
    private $importedlines = '0';

    /**
     * @var string|null
     */
    private $filename;

    /**
     * @var \DateTime|null
     */
    private $datum;


}
