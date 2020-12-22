<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExternalApis
 *
 * @ORM\Table(name="t_external_apis", indexes={@ORM\Index(name="external_api_host_group_idx", columns={"host_group_id"}), @ORM\Index(name="external_api_partner_idx", columns={"partner_id"})})
 * @ORM\Entity
 */
class ExternalApis
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_id", type="string", length=255, nullable=true)
     */
    private $externalId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="token", type="string", length=250, nullable=true)
     */
    private $token;

    /**
     * @var \THostGroups
     *
     * @ORM\ManyToOne(targetEntity="THostGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="host_group_id", referencedColumnName="id")
     * })
     */
    private $hostGroup;

    /**
     * @var \TExternalApiPartners
     *
     * @ORM\ManyToOne(targetEntity="TExternalApiPartners")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="id")
     * })
     */
    private $partner;


}
