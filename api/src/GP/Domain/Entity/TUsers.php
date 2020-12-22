<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TUsers
 *
 * @ORM\Table(name="t_users", indexes={@ORM\Index(name="Address to User", columns={"address_id"}), @ORM\Index(name="dunning_allowed_idx", columns={"dunning_allowed"}), @ORM\Index(name="user_rank_idx", columns={"rank_id"})})
 * @ORM\Entity
 */
class TUsers
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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=true)
     */
    private $password;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="dunning_allowed", type="boolean", nullable=true, options={"default"="1"})
     */
    private $dunningAllowed = true;

    /**
     * @var \TAddress
     *
     * @ORM\ManyToOne(targetEntity="TAddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="ID")
     * })
     */
    private $address;

    /**
     * @var \TUserRanks
     *
     * @ORM\ManyToOne(targetEntity="TUserRanks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rank_id", referencedColumnName="id")
     * })
     */
    private $rank;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TDropshippingPartners", inversedBy="user")
     * @ORM\JoinTable(name="t_dropshipping_user_to_partner_map",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="partner_id", referencedColumnName="ID")
     *   }
     * )
     */
    private $partner;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TUsergroups", inversedBy="user")
     * @ORM\JoinTable(name="t_usergroup_to_user_map",
     *   joinColumns={
     *     @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="usergroup_id", referencedColumnName="id")
     *   }
     * )
     */
    private $usergroup;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->partner = new \Doctrine\Common\Collections\ArrayCollection();
        $this->usergroup = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
