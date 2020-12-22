<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageVariationVersions
 *
 * @ORM\Table(name="t_page_variation_versions", indexes={@ORM\Index(name="version_name_index", columns={"version_name"})})
 * @ORM\Entity
 */
class PageVariationVersions
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
     * @var int
     *
     * @ORM\Column(name="page_variation_id", type="integer", nullable=false)
     */
    private $pageVariationId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="version_name", type="string", length=50, nullable=true)
     */
    private $versionName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="version_number", type="integer", nullable=true)
     */
    private $versionNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="creation_user_id", type="integer", nullable=false)
     */
    private $creationUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_change_date", type="datetime", nullable=true)
     */
    private $lastChangeDate;

    /**
     * @var int
     *
     * @ORM\Column(name="last_change_user_id", type="integer", nullable=false)
     */
    private $lastChangeUserId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="publication_user_id", type="integer", nullable=true)
     */
    private $publicationUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="publication_date", type="datetime", nullable=true)
     */
    private $publicationDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=true)
     */
    private $metaTitle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="meta_description", type="string", length=255, nullable=true)
     */
    private $metaDescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="layout_path", type="string", length=255, nullable=true)
     */
    private $layoutPath;

    /**
     * @var int|null
     *
     * @ORM\Column(name="draft_user_id", type="integer", nullable=true)
     */
    private $draftUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="draft_date", type="datetime", nullable=true)
     */
    private $draftDate;

    /**
     * @var string
     *
     * @ORM\Column(name="layout_path_desktop", type="string", length=255, nullable=false, options={"default"="GPDefaultDesktop"})
     */
    private $layoutPathDesktop = 'GPDefaultDesktop';

    /**
     * @var string
     *
     * @ORM\Column(name="layout_path_mobile", type="string", length=255, nullable=false, options={"default"="GPDefaultMobile"})
     */
    private $layoutPathMobile = 'GPDefaultMobile';

    /**
     * @var int|null
     *
     * @ORM\Column(name="layout_id", type="integer", nullable=true)
     */
    private $layoutId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="mobile_search_active", type="boolean", nullable=true)
     */
    private $mobileSearchActive = '0';


}
