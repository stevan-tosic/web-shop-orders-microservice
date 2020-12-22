<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THostGroupsPdfTemplates
 *
 * @ORM\Table(name="t_host_groups_pdf_templates", indexes={@ORM\Index(name="t_host_groups_pdf_templates_t_host_groups_id_fk", columns={"host_group_id"}), @ORM\Index(name="t_host_groups_pdf_templates_t_pdf_templates_id_fk", columns={"pdf_template_id"})})
 * @ORM\Entity
 */
class THostGroupsPdfTemplates
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
     * @var \THostGroups
     *
     * @ORM\ManyToOne(targetEntity="THostGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="host_group_id", referencedColumnName="id")
     * })
     */
    private $hostGroup;

    /**
     * @var \TPdfTemplates
     *
     * @ORM\ManyToOne(targetEntity="TPdfTemplates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pdf_template_id", referencedColumnName="id")
     * })
     */
    private $pdfTemplate;


}
