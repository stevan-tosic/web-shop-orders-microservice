<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Providers
 *
 * @ORM\Table(name="t_providers", indexes={@ORM\Index(name="FK_t_providers_t_address", columns={"address_id"}), @ORM\Index(name="IX_t_providers", columns={"ZIP"})})
 * @ORM\Entity
 */
class Providers
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
     * @ORM\Column(name="company", type="string", length=100, nullable=true)
     */
    private $company;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=100, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ZIP", type="string", length=50, nullable=true)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=100, nullable=true)
     */
    private $location;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="internet", type="string", length=100, nullable=true)
     */
    private $internet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bankaccount", type="text", length=0, nullable=true)
     */
    private $bankaccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comments", type="text", length=0, nullable=true)
     */
    private $comments;

    /**
     * @var int|null
     *
     * @ORM\Column(name="payment", type="integer", nullable=true)
     */
    private $payment = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="login", type="string", length=20, nullable=true)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=20, nullable=true)
     */
    private $password;

    /**
     * @var int|null
     *
     * @ORM\Column(name="viewoption", type="integer", nullable=true)
     */
    private $viewoption = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="text", length=0, nullable=true)
     */
    private $phone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="validated", type="integer", nullable=true)
     */
    private $validated = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true, options={"default"="1"})
     */
    private $status = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=0, nullable=true)
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="iban", type="string", length=50, nullable=true, options={"fixed"=true})
     */
    private $iban;

    /**
     * @var int|null
     *
     * @ORM\Column(name="billing_address_id", type="integer", nullable=true)
     */
    private $billingAddressId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="payment_reference", type="string", length=100, nullable=true)
     */
    private $paymentReference;

    /**
     * @var int|null
     *
     * @ORM\Column(name="provider_accounting", type="integer", nullable=true)
     */
    private $providerAccounting;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var bool
     *
     * @ORM\Column(name="hide_phone", type="boolean", nullable=false)
     */
    private $hidePhone = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="hide_email", type="boolean", nullable=false)
     */
    private $hideEmail = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="redeem_externally_link_de", type="string", length=255, nullable=true)
     */
    private $redeemExternallyLinkDe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="redeem_externally_link_fr", type="string", length=255, nullable=true)
     */
    private $redeemExternallyLinkFr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="redeem_externally_link_it", type="string", length=255, nullable=true)
     */
    private $redeemExternallyLinkIt;

    /**
     * @var \TAddress
     *
     * @ORM\ManyToOne(targetEntity="TAddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="ID")
     * })
     */
    private $address2;


}
