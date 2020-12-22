<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDropshippingPartnerToChangeVersionMap
 *
 * @ORM\Table(name="t_dropshipping_partner_to_change_version_map", indexes={@ORM\Index(name="FK_t_dropshipping_partner_to_change_version_map_version_id", columns={"version_id"})})
 * @ORM\Entity
 */
class TDropshippingPartnerToChangeVersionMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="partner_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $partnerId;

    /**
     * @var \TChangeVersions
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="TChangeVersions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="version_id", referencedColumnName="id")
     * })
     */
    private $version;


}
