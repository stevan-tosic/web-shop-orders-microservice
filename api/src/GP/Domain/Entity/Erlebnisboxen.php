<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Erlebnisboxen
 *
 * @ORM\Table(name="t_erlebnisboxen", uniqueConstraints={@ORM\UniqueConstraint(name="IX_t_erlebnisboxen_1", columns={"boxCode"})}, indexes={@ORM\Index(name="FK_t_erlebnisboxen_t_address", columns={"address_id"}), @ORM\Index(name="IX_t_erlebnisboxen", columns={"boxID"}), @ORM\Index(name="IX_t_erlebnisboxen_2", columns={"boxStatusID"}), @ORM\Index(name="IX_t_erlebnisboxen_3", columns={"productID"}), @ORM\Index(name="IX_t_erlebnisboxen_4", columns={"retailerID"})})
 * @ORM\Entity
 */
class Erlebnisboxen
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
     * @var int|null
     *
     * @ORM\Column(name="boxID", type="integer", nullable=true)
     */
    private $boxid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="boxCode", type="string", length=50, nullable=true)
     */
    private $boxcode;

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
    private $boxstatusid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="productID", type="integer", nullable=true)
     */
    private $productid = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vorname", type="string", length=50, nullable=true)
     */
    private $vorname;

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
     * @var float|null
     *
     * @ORM\Column(name="commission", type="float", precision=10, scale=0, nullable=true)
     */
    private $commission = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="payed", type="integer", nullable=true)
     */
    private $payed = '0';

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
     * @ORM\Column(name="barCode", type="string", length=50, nullable=true)
     */
    private $barcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=0, nullable=true)
     */
    private $notes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="anrede", type="integer", nullable=true)
     */
    private $anrede = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="connexCode", type="string", length=50, nullable=true)
     */
    private $connexcode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="retailerID", type="integer", nullable=true)
     */
    private $retailerid = '0';

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

    /**
     * @var int|null
     *
     * @ORM\Column(name="virtual_box", type="integer", nullable=true)
     */
    private $virtualBox = '0';

    /**
     * @var \TAddress
     *
     * @ORM\ManyToOne(targetEntity="TAddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="ID")
     * })
     */
    private $address;


}
