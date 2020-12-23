<?php

namespace App\GP\Domain\Entity;



/**
 * ArticleExperiences
 */
class ArticleExperiences
{
    /**
     * @var int
     */
    private $id;

    private $article;

    /**
     * @var int|null
     */
    private $locationId;

    /**
     * @var bool
     */
    private $isEverywhere = '0';

    /**
     * @var int|null
     */
    private $people;

    /**
     * @var float
     */
    private $commissionOffline = '0';

    /**
     * @var bool
     */
    private $isOffline = '0';

    /**
     * @var bool
     */
    private $isTicket = '0';

    /**
     * @var int|null
     */
    private $providerId;

    /**
     * @var int|null
     */
    private $providerSubId;

    /**
     * @var bool
     */
    private $boxIsVirtual = '0';

    /**
     * @var float
     */
    private $priceOffline = '0';

    /**
     * @var \DateTime|null
     */
    private $lastChangeDate;

    private $lastChangeUser;


}
