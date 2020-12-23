<?php

namespace App\GP\Domain\Entity;



/**
 * Widgets
 */
class Widgets
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $pageVersionId;

    /**
     * @var \DateTime|null
     */
    private $startDate;

    /**
     * @var \DateTime|null
     */
    private $endDate;

    /**
     * @var bool|null
     */
    private $isDynamic;

    /**
     * @var int|null
     */
    private $sortOrder;

    /**
     * @var int
     */
    private $creationUserId;

    /**
     * @var \DateTime|null
     */
    private $creationDate;

    /**
     * @var int
     */
    private $lastChangeUserId;

    /**
     * @var \DateTime|null
     */
    private $lastChangeDate;

    /**
     * @var int|null
     */
    private $parentId;

    /**
     * @var int
     */
    private $widgetTypeId;

    /**
     * @var int|null
     */
    private $widgetTemplateId;

    /**
     * @var int|null
     */
    private $widgetSubTypeId;

    /**
     * @var int|null
     */
    private $desktopTemplateId;

    /**
     * @var int|null
     */
    private $mobileTemplateId;

    /**
     * @var bool
     */
    private $showOnDesktop = true;

    /**
     * @var bool
     */
    private $showOnMobile = true;


}
