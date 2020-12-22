<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetailoImport
 *
 * @ORM\Table(name="t_retailo_import")
 * @ORM\Entity
 */
class RetailoImport
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="readingLines", type="integer", nullable=true)
     */
    private $readinglines = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="importedLines", type="integer", nullable=true)
     */
    private $importedlines = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="fileName", type="string", length=50, nullable=true)
     */
    private $filename;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datum", type="datetime", nullable=true)
     */
    private $datum;


}
