<?php

namespace App\GP\Domain\Entity;



/**
 * CategoriesNew
 */
class CategoriesNew
{

    private $id;

    private $categoryGroupId;

    private $hostId;

    private $title;

    private $subtitle;

    private $slug;

    private $seoTextShort;

    private $seoTextLong;

    private $active;

    private $googleCategory;

    private $categoryStatusId = '1';

    private $redirectTarget;

    private $siroopCategory;

    private $keyword;

    public function __construct()
    {
        $this->keyword = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
