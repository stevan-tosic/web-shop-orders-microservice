<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="t_categories", indexes={@ORM\Index(name="IX_t_categories", columns={"parentID"})})
 * @ORM\Entity
 */
class Categories
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
     * @var string|null
     *
     * @ORM\Column(name="categorie_0", type="string", length=50, nullable=true)
     */
    private $categorie0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categorie_1", type="string", length=50, nullable=true)
     */
    private $categorie1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="categorie_2", type="string", length=50, nullable=true)
     */
    private $categorie2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle_0", type="string", length=200, nullable=true)
     */
    private $subtitle0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle_1", type="string", length=200, nullable=true)
     */
    private $subtitle1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle_2", type="string", length=200, nullable=true)
     */
    private $subtitle2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_0", type="text", length=0, nullable=true)
     */
    private $short0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_1", type="text", length=0, nullable=true)
     */
    private $short1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_2", type="text", length=0, nullable=true)
     */
    private $short2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="long_0", type="text", length=0, nullable=true)
     */
    private $long0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="long_1", type="text", length=0, nullable=true)
     */
    private $long1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="long_2", type="text", length=0, nullable=true)
     */
    private $long2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_0", type="string", length=200, nullable=true)
     */
    private $title0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_1", type="string", length=200, nullable=true)
     */
    private $title1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_2", type="string", length=200, nullable=true)
     */
    private $title2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords_0", type="string", length=200, nullable=true)
     */
    private $keywords0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords_1", type="string", length=200, nullable=true)
     */
    private $keywords1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords_2", type="string", length=200, nullable=true)
     */
    private $keywords2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_0", type="text", length=0, nullable=true)
     */
    private $description0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_1", type="text", length=0, nullable=true)
     */
    private $description1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_2", type="text", length=0, nullable=true)
     */
    private $description2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tags_0", type="text", length=0, nullable=true)
     */
    private $tags0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tags_1", type="text", length=0, nullable=true)
     */
    private $tags1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tags_2", type="text", length=0, nullable=true)
     */
    private $tags2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="parentID", type="integer", nullable=true)
     */
    private $parentid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="exactTitle", type="integer", nullable=true)
     */
    private $exacttitle = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortNr", type="integer", nullable=true)
     */
    private $sortnr = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_0", type="string", length=200, nullable=true)
     */
    private $url0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_1", type="string", length=200, nullable=true)
     */
    private $url1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_2", type="string", length=200, nullable=true)
     */
    private $url2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cleanURL_0", type="string", length=200, nullable=true)
     */
    private $cleanurl0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cleanURL_1", type="string", length=200, nullable=true)
     */
    private $cleanurl1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cleanURL_2", type="string", length=200, nullable=true)
     */
    private $cleanurl2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="active_0", type="integer", nullable=true)
     */
    private $active0 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="active_1", type="integer", nullable=true)
     */
    private $active1 = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="active_2", type="integer", nullable=true)
     */
    private $active2 = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url_0", type="string", length=50, nullable=true)
     */
    private $seoUrl0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url_1", type="string", length=50, nullable=true)
     */
    private $seoUrl1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="seo_url_2", type="string", length=50, nullable=true)
     */
    private $seoUrl2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_category", type="string", length=512, nullable=true)
     */
    private $googleCategory;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_category_1", type="string", length=512, nullable=true)
     */
    private $googleCategory1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="google_category_2", type="string", length=512, nullable=true)
     */
    private $googleCategory2;


}
