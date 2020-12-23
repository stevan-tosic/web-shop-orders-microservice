<?php

namespace App\GP\Domain\Entity;



/**
 * ArticleExperienceVerticals
 */
class ArticleExperienceVerticals
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var float
     */
    private $commission = '0';

    /**
     * @var string|null
     */
    private $when;

    /**
     * @var string|null
     */
    private $requirements;

    /**
     * @var string|null
     */
    private $duration;

    /**
     * @var string|null
     */
    private $weather;

    /**
     * @var string|null
     */
    private $equipment;

    /**
     * @var string|null
     */
    private $participants;

    /**
     * @var string|null
     */
    private $specials;

    /**
     * @var string|null
     */
    private $redeemNote;

    /**
     * @var string|null
     */
    private $offlineText;

    /**
     * @var bool
     */
    private $boxIsTextListing = '0';

    /**
     * @var \DateTime|null
     */
    private $lastChangeDate;

    private $lastChangeUser;


}
