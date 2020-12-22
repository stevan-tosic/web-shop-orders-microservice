<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THostLogos
 *
 * @ORM\Table(name="t_host_logos", uniqueConstraints={@ORM\UniqueConstraint(name="ux_host_logo_host_id", columns={"host_id"})})
 * @ORM\Entity
 */
class THostLogos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="blob", length=0, nullable=false)
     */
    private $logo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pdf_header_width", type="integer", nullable=true)
     */
    private $pdfHeaderWidth;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pdf_header_height", type="integer", nullable=true)
     */
    private $pdfHeaderHeight;

    /**
     * @var \THosts
     *
     * @ORM\ManyToOne(targetEntity="THosts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="host_id", referencedColumnName="id")
     * })
     */
    private $host;


}
