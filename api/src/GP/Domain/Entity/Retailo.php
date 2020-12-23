<?php

namespace App\GP\Domain\Entity;



/**
 * Retailo
 */
class Retailo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $barcode;

    /**
     * @var string|null
     */
    private $giftcode;

    /**
     * @var float|null
     */
    private $amount = '0';

    /**
     * @var float|null
     */
    private $currentamount = '0';

    /**
     * @var \DateTime|null
     */
    private $creationdate;

    /**
     * @var \DateTime|null
     */
    private $activationdate;

    /**
     * @var \DateTime|null
     */
    private $terminationdate;

    /**
     * @var \DateTime|null
     */
    private $usagedate;

    /**
     * @var int|null
     */
    private $orderid = '0';

    /**
     * @var int|null
     */
    private $typeid = '0';

    /**
     * @var int|null
     */
    private $singlevalue = '0';

    /**
     * @var int|null
     */
    private $boxstatusid = '0';

    /**
     * @var string|null
     */
    private $notes;

    /**
     * @var float|null
     */
    private $minorderamount = '0';

    /**
     * @var int|null
     */
    private $percentvalue = '0';

    /**
     * @var int|null
     */
    private $multipleuse = '0';

    /**
     * @var int
     */
    private $extend = '0';

    /**
     * @var int|null
     */
    private $marketingvoucher = '0';


}
