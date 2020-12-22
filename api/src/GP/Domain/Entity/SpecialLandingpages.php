<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SpecialLandingpages
 *
 * @ORM\Table(name="t_special_landingpages")
 * @ORM\Entity
 */
class SpecialLandingpages
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
     * @var int|null
     *
     * @ORM\Column(name="content_id", type="integer", nullable=true)
     */
    private $contentId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var string|null
     *
     * @ORM\Column(name="datafield", type="string", length=100, nullable=true)
     */
    private $datafield;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_0", type="string", length=100, nullable=true)
     */
    private $category0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_1", type="string", length=100, nullable=true)
     */
    private $category1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="category_2", type="string", length=100, nullable=true)
     */
    private $category2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle_0", type="string", length=100, nullable=true)
     */
    private $subtitle0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle_1", type="string", length=100, nullable=true)
     */
    private $subtitle1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subtitle_2", type="string", length=100, nullable=true)
     */
    private $subtitle2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag_0", type="string", length=100, nullable=true)
     */
    private $tag0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag_1", type="string", length=100, nullable=true)
     */
    private $tag1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag_2", type="string", length=100, nullable=true)
     */
    private $tag2;

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


}
