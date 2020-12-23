<?php

namespace App\GP\Domain\Entity;



/**
 * MetaKeywords
 */
class MetaKeywords
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $keyword;

    /**
     * @var int
     */
    private $language;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $article;

    /**
     * @var \Doctrine\Common\Collections\Collection
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
