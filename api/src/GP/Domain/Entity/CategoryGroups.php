<?php

namespace App\GP\Domain\Entity;



/**
 * CategoryGroups
 */
class CategoryGroups
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $parentId;

    /**
     * @var int|null
     */
    private $hostGroupId;

    /**
     * @var int|null
     */
    private $pageId;

    /**
     * @var int|null
     */
    private $sortOrder;

    /**
     * @var bool|null
     */
    private $isGoogleShopping;

    /**
     * @var bool
     */
    private $isSiroop = true;

    /**
     * @var float
     */
    private $totalRevenue = '0';

    /**
     * @var float
     */
    private $redeemedRevenue = '0';

    /**
     * @var string|null
     */
    private $color = '';

    private $filterTemplate;


}
