<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PartnerSetting
 *
 * @ORM\Table(name="t_partner_setting", indexes={@ORM\Index(name="fk_partner_setting_dropshipping_partner_id", columns={"dropshipping_partner_id"}), @ORM\Index(name="fk_partner_setting_provider_id", columns={"provider_id"})})
 * @ORM\Entity
 */
class PartnerSetting
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=1000, nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", length=255, nullable=false)
     */
    private $clientId;

    /**
     * @var string
     *
     * @ORM\Column(name="partner_type", type="string", length=20, nullable=false)
     */
    private $partnerType;

    /**
     * @var \TDropshippingPartners
     *
     * @ORM\ManyToOne(targetEntity="TDropshippingPartners")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dropshipping_partner_id", referencedColumnName="ID")
     * })
     */
    private $dropshippingPartner;

    /**
     * @var \TProviders
     *
     * @ORM\ManyToOne(targetEntity="TProviders")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provider_id", referencedColumnName="ID")
     * })
     */
    private $provider;


}
