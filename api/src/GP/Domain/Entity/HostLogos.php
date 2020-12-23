<?php

namespace App\GP\Domain\Entity;



/**
 * HostLogos
 */
class HostLogos
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var int|null
     */
    private $pdfHeaderWidth;

    /**
     * @var int|null
     */
    private $pdfHeaderHeight;

    private $host;


}
