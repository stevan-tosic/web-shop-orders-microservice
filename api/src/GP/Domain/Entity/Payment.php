<?php

namespace App\GP\Domain\Entity;



/**
 * Payment
 */
class Payment
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $reihenfolge = '0';

    /**
     * @var int|null
     */
    private $creditCheck = '0';

    /**
     * @var int|null
     */
    private $account;

    /**
     * @var bool
     */
    private $active = true;

    /**
     * @var int|null
     */
    private $datatrans = '0';

    /**
     * @var string|null
     */
    private $datatransMethod;

    /**
     * @var bool|null
     */
    private $isBill = '0';

    private $article;


}
