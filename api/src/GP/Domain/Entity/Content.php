<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Content
 *
 * @ORM\Table(name="t_content")
 * @ORM\Entity
 */
class Content
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
     * @ORM\Column(name="titleID_0", type="string", length=50, nullable=true)
     */
    private $titleid0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titleID_1", type="string", length=50, nullable=true)
     */
    private $titleid1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titleID_2", type="string", length=50, nullable=true)
     */
    private $titleid2;

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
     * @ORM\Column(name="content_0", type="text", length=0, nullable=true)
     */
    private $content0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_1", type="text", length=0, nullable=true)
     */
    private $content1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content_2", type="text", length=0, nullable=true)
     */
    private $content2;

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


}
