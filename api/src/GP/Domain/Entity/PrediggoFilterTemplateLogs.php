<?php

namespace App\GP\Domain\Entity;



/**
 * PrediggoFilterTemplateLogs
 */
class PrediggoFilterTemplateLogs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var json|null
     */
    private $contentBeforeChange;

    /**
     * @var json|null
     */
    private $contentAfterChange;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    private $filterTemplate;

    /**
     * @var \TUsers
     *
               *   @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
     * })
     */
    private $updatedBy;


}
