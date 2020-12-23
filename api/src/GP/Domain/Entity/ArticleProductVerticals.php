<?php

namespace App\GP\Domain\Entity;



/**
 * ArticleProductVerticals
 */
class ArticleProductVerticals
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime|null
     */
    private $lastChangeDate;

    /**
     * @var int|null
     */
    private $minimumOrderQuantity = '1';

    private $lastChangeUser;


}
