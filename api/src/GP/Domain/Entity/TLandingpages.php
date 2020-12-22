<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TLandingpages
 *
 * @ORM\Table(name="t_landingpages")
 * @ORM\Entity
 */
class TLandingpages
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
     * @var int|null
     *
     * @ORM\Column(name="content_id", type="integer", nullable=true)
     */
    private $contentId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="list_0", type="boolean", nullable=true)
     */
    private $list0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="sitemap", type="boolean", nullable=true)
     */
    private $sitemap;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag", type="string", length=100, nullable=true)
     */
    private $tag;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_0", type="string", length=100, nullable=true)
     */
    private $title0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cleanURL_0", type="string", length=400, nullable=true)
     */
    private $cleanurl0;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="list_1", type="boolean", nullable=true)
     */
    private $list1;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="list_2", type="boolean", nullable=true)
     */
    private $list2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_1", type="string", length=100, nullable=true)
     */
    private $title1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_2", type="string", length=100, nullable=true)
     */
    private $title2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cleanURL_1", type="string", length=400, nullable=true)
     */
    private $cleanurl1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cleanURL_2", type="string", length=400, nullable=true)
     */
    private $cleanurl2;


}
