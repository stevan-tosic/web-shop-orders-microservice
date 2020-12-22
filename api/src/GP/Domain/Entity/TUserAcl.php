<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TUserAcl
 *
 * @ORM\Table(name="t_user_acl", indexes={@ORM\Index(name="FK__t_user_ac__creat__1F0F6E33", columns={"creation_user_id"}), @ORM\Index(name="FK__t_user_ac__permi__1E1B49FA", columns={"permission_id"}), @ORM\Index(name="Usergroup ID to ACL Entry", columns={"usergroup_id"})})
 * @ORM\Entity
 */
class TUserAcl
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creation_user_id", referencedColumnName="id")
     * })
     */
    private $creationUser;

    /**
     * @var \TPermissions
     *
     * @ORM\ManyToOne(targetEntity="TPermissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permission_id", referencedColumnName="id")
     * })
     */
    private $permission;

    /**
     * @var \TUsergroups
     *
     * @ORM\ManyToOne(targetEntity="TUsergroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usergroup_id", referencedColumnName="id")
     * })
     */
    private $usergroup;


}
