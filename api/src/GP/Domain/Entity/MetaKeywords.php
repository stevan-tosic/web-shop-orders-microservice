<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MetaKeywords
 *
 * @ORM\Table(name="t_meta_keywords")
 * @ORM\Entity
 */
class MetaKeywords
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
     * @var string
     *
     * @ORM\Column(name="keyword", type="string", length=256, nullable=false)
     */
    private $keyword;

    /**
     * @var int
     *
     * @ORM\Column(name="language", type="integer", nullable=false)
     */
    private $language;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TArticles", mappedBy="keyword")
     */
    private $article;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TCategoriesNew", mappedBy="keyword")
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
