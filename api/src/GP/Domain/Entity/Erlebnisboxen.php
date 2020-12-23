<?php

namespace App\GP\Domain\Entity;



/**
 * Erlebnisboxen
 */
class Erlebnisboxen
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $boxid = '0';

    /**
     * @var string|null
     */
    private $boxcode;

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
    private $boxstatusid = '0';

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
    private $vorname;

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
     * @var float|null
     */
    private $commission = '0';

    /**
     * @var float|null
     */
    private $price = '0';

    /**
     * @var int|null
     */
    private $payed = '0';

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
    private $barcode;

    /**
     * @var string|null
     */
    private $notes;

    /**
     * @var int|null
     */
    private $anrede = '0';

    /**
     * @var string|null
     */
    private $connexcode;

    /**
     * @var int|null
     */
    private $retailerid = '0';

    /**
     * @var int|null
     */
    private $connexexport = '0';

    /**
     * @var int
     */
    private $extend = '0';

    /**
     * @var int|null
     */
    private $virtualBox = '0';

    private $address;


}
