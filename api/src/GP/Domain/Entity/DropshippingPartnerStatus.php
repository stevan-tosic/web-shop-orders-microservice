<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DropshippingPartnerStatus
 *
 * @ORM\Table(name="t_dropshipping_partner_status", indexes={@ORM\Index(name="FK__t_dropshi__partn__0CB0C6D6", columns={"partner_id"})})
 * @ORM\Entity
 */
class DropshippingPartnerStatus
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
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=true)
     */
    private $sortOrder;

    /**
     * @var \TDropshippingPartners
     *
     * @ORM\ManyToOne(targetEntity="TDropshippingPartners")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="ID")
     * })
     */
    private $partner;


}
