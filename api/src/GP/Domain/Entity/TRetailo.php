<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRetailo
 *
 * @ORM\Table(name="t_retailo", indexes={@ORM\Index(name="IX_t_retailo", columns={"orderID"}), @ORM\Index(name="t_retailo_giftCode", columns={"giftCode"})})
 * @ORM\Entity
 */
class TRetailo
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
     * @ORM\Column(name="barCode", type="string", length=50, nullable=true)
     */
    private $barcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="giftCode", type="string", length=50, nullable=true)
     */
    private $giftcode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=true)
     */
    private $amount = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="currentAmount", type="float", precision=10, scale=0, nullable=true)
     */
    private $currentamount = '0';

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
     * @ORM\Column(name="orderID", type="integer", nullable=true)
     */
    private $orderid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="typeID", type="integer", nullable=true)
     */
    private $typeid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="singleValue", type="integer", nullable=true)
     */
    private $singlevalue = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="boxStatusID", type="integer", nullable=true)
     */
    private $boxstatusid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=0, nullable=true)
     */
    private $notes;

    /**
     * @var float|null
     *
     * @ORM\Column(name="minOrderAmount", type="float", precision=10, scale=0, nullable=true)
     */
    private $minorderamount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="percentValue", type="integer", nullable=true)
     */
    private $percentvalue = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="multipleUse", type="integer", nullable=true)
     */
    private $multipleuse = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="extend", type="integer", nullable=false)
     */
    private $extend = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="marketingVoucher", type="integer", nullable=true)
     */
    private $marketingvoucher = '0';


}
