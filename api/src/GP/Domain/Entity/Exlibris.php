<?php

namespace App\GP\Domain\Entity;



/**
 * Exlibris
 */
class Exlibris
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $boxcode;

    /**
     * @var string|null
     */
    private $boxtarget;

    /**
     * @var string|null
     */
    private $boxprice;

    /**
     * @var string|null
     */
    private $boxtext;

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
    private $boxstatusid;

    /**
     * @var int|null
     */
    private $productid = '0';

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $telefon;

    /**
     * @var int|null
     */
    private $newsletter = '0';

    /**
     * @var \DateTime|null
     */
    private $paymentdate;

    /**
     * @var int|null
     */
    private $commission = '0';

    /**
     * @var int|null
     */
    private $providerid = '0';

    /**
     * @var int|null
     */
    private $price = '0';

    /**
     * @var int|null
     */
    private $payed = '0';

    /**
     * @var int|null
     */
    private $boxpricereal = '0';

    /**
     * @var string|null
     */
    private $referenceprovider;

    /**
     * @var int|null
     */
    private $providersubid = '0';

    /**
     * @var string|null
     */
    private $notes;

    /**
     * @var string|null
     */
    private $connexcode;

    /**
     * @var int|null
     */
    private $anrede = '0';

    /**
     * @var string|null
     */
    private $vorname;

    /**
     * @var int|null
     */
    private $connexexport = '0';

    /**
     * @var int
     */
    private $extend = '0';


}
