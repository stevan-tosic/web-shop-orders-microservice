<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPrediggoFilterTemplateLogs
 *
 * @ORM\Table(name="t_prediggo_filter_template_logs", indexes={@ORM\Index(name="t_filter_template_logs_t_filter_template_id_fk", columns={"filter_template_id"}), @ORM\Index(name="t_filter_template_logs_t_users_id_fk", columns={"updated_by"})})
 * @ORM\Entity
 */
class TPrediggoFilterTemplateLogs
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
     * @var json|null
     *
     * @ORM\Column(name="content_before_change", type="json", nullable=true)
     */
    private $contentBeforeChange;

    /**
     * @var json|null
     *
     * @ORM\Column(name="content_after_change", type="json", nullable=true)
     */
    private $contentAfterChange;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \TPrediggoFilterTemplates
     *
     * @ORM\ManyToOne(targetEntity="TPrediggoFilterTemplates")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="filter_template_id", referencedColumnName="id")
     * })
     */
    private $filterTemplate;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
     * })
     */
    private $updatedBy;


}
