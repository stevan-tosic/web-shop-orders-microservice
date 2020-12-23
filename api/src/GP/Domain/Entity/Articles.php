<?php

namespace App\GP\Domain\Entity;



class Articles
{
    private $id;

    private $articleExperience;

    private $articleProduct;

    private $articleTypeId;

    private $productId;

    private $taxId;

    private $useOrderTax = '0';

    private $creationDate;

    private $lastChangeDate;

    private $variationId;

    private $totalRevenue = '0';

    private $redeemedRevenue = '0';

    private $activationDate;

    private $choArticle = '0';

    private $creationUser;

    private $lastChangeUser;

    private $keyword;

    public function __construct()
    {
        $this->keyword = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
