<?php

namespace App\GP\Domain\Entity;



/**
 * UsedCodes
 */
class UsedCodes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $orderid = '0';

    /**
     * @var int|null
     */
    private $codeid = '0';

    /**
     * @var float|null
     */
    private $usedamount = '0';

    /**
     * @var float|null
     */
    private $restamount = '0';

    /**
     * @var int|null
     */
    private $usedall;

    /**
     * @var int|null
     */
    private $aktiv = '0';

    /**
     * @var int|null
     */
    private $cartId;


}
