<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exlibris
 *
 * @ORM\Table(name="t_exlibris")
 * @ORM\Entity
 */
class Exlibris
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="boxCode", type="string", length=50, nullable=true)
     */
    private $boxcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="boxTarget", type="string", length=2, nullable=true)
     */
    private $boxtarget;

    /**
     * @var string|null
     *
     * @ORM\Column(name="boxPrice", type="string", length=2, nullable=true)
     */
    private $boxprice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="boxText", type="string", length=50, nullable=true)
     */
    private $boxtext;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creationDate", type="datetime", nullable=true)
     */
    private $creationdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="activationDate", type="datetime", nullable=true)
     */
    private $activationdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="terminationDate", type="datetime", nullable=true)
     */
    private $terminationdate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="usageDate", type="datetime", nullable=true)
     */
    private $usagedate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="boxStatusID", type="integer", nullable=true)
     */
    private $boxstatusid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="productID", type="integer", nullable=true)
     */
    private $productid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telefon", type="string", length=50, nullable=true)
     */
    private $telefon;

    /**
     * @var int|null
     *
     * @ORM\Column(name="newsletter", type="integer", nullable=true)
     */
    private $newsletter = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="paymentDate", type="datetime", nullable=true)
     */
    private $paymentdate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="commission", type="integer", nullable=true)
     */
    private $commission = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="providerID", type="integer", nullable=true)
     */
    private $providerid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="payed", type="integer", nullable=true)
     */
    private $payed = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="boxPriceReal", type="integer", nullable=true)
     */
    private $boxpricereal = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="referenceProvider", type="text", length=0, nullable=true)
     */
    private $referenceprovider;

    /**
     * @var int|null
     *
     * @ORM\Column(name="providerSubID", type="integer", nullable=true)
     */
    private $providersubid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=0, nullable=true)
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="connexCode", type="string", length=50, nullable=true)
     */
    private $connexcode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="anrede", type="integer", nullable=true)
     */
    private $anrede = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vorname", type="string", length=50, nullable=true)
     */
    private $vorname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="connexExport", type="integer", nullable=true)
     */
    private $connexexport = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="extend", type="integer", nullable=false)
     */
    private $extend = '0';


}
