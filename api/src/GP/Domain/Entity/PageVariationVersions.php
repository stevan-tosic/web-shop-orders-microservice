<?php

namespace App\GP\Domain\Entity;



/**
 * PageVariationVersions
 */
class PageVariationVersions
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $pageVariationId;

    /**
     * @var string|null
     */
    private $versionName;

    /**
     * @var int|null
     */
    private $versionNumber;

    /**
     * @var \DateTime|null
     */
    private $creationDate;

    /**
     * @var int
     */
    private $creationUserId;

    /**
     * @var \DateTime|null
     */
    private $lastChangeDate;

    /**
     * @var int
     */
    private $lastChangeUserId;

    /**
     * @var int|null
     */
    private $publicationUserId;

    /**
     * @var \DateTime|null
     */
    private $publicationDate;

    /**
     * @var string|null
     */
    private $metaTitle;

    /**
     * @var string|null
     */
    private $metaDescription;

    /**
     * @var string|null
     */
    private $layoutPath;

    /**
     * @var int|null
     */
    private $draftUserId;

    /**
     * @var \DateTime|null
     */
    private $draftDate;

    /**
     * @var string
     */
    private $layoutPathDesktop = 'GPDefaultDesktop';

    /**
     * @var string
     */
    private $layoutPathMobile = 'GPDefaultMobile';

    /**
     * @var int|null
     */
    private $layoutId;

    /**
     * @var bool|null
     */
    private $mobileSearchActive = '0';


}
