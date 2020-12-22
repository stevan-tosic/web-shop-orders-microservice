<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProvidersSubs
 *
 * @ORM\Table(name="t_providers_subs", indexes={@ORM\Index(name="FK_t_providers_subs_t_address", columns={"address_id"}), @ORM\Index(name="IX_t_providers_subs", columns={"providerID"})})
 * @ORM\Entity
 */
class TProvidersSubs
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
     * @ORM\Column(name="providerID", type="integer", nullable=true)
     */
    private $providerid = '0';

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
     * @ORM\Column(name="phone", type="string", length=50, nullable=true)
     */
    private $phone;

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
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=0, nullable=true)
     */
    private $notes;

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
     * @var \TAddress
     *
     * @ORM\ManyToOne(targetEntity="TAddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="ID")
     * })
     */
    private $address2;


}
