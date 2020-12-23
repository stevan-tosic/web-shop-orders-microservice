<?php

namespace App\GP\Domain\Entity;



/**
 * Hosts
 */
class Hosts
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $host;

    /**
     * @var string|null
     */
    private $shortName;

    /**
     * @var int|null
     */
    private $languageId;

    /**
     * @var int
     */
    private $hostGroupId;

    /**
     * @var int
     */
    private $defaultLayoutId = '1';

    /**
     * @var bool
     */
    private $hasBillLogo = '0';

    /**
     * @var string|null
     */
    private $popularityDays;

    /**
     * @var int|null
     */
    private $defaultCheckoutLayoutId;

    /**
     * @var int
     */
    private $priority = '50';

    /**
     * @var bool
     */
    private $choEnabled = '0';


}
