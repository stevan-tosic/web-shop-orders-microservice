<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PdfTemplates
 *
 * @ORM\Table(name="t_pdf_templates", indexes={@ORM\Index(name="t_pdf_templates_t_pdf_types_id_fk", columns={"type_id"})})
 * @ORM\Entity
 */
class PdfTemplates
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var \TPdfTypes
     *
     * @ORM\ManyToOne(targetEntity="TPdfTypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;


}
