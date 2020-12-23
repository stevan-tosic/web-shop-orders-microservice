<?php

namespace App\GP\Domain\Entity;



/**
 * HostGroupsPdfTemplates
 */
class HostGroupsPdfTemplates
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \THostGroups
     *
               *   @ORM\JoinColumn(name="host_group_id", referencedColumnName="id")
     * })
     */
    private $hostGroup;

    /**
     * @var \TPdfTemplates
     *
               *   @ORM\JoinColumn(name="pdf_template_id", referencedColumnName="id")
     * })
     */
    private $pdfTemplate;


}
