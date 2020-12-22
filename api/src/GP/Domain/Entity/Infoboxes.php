<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Infoboxes
 *
 * @ORM\Table(name="t_infoboxes", indexes={@ORM\Index(name="FK__t_infobox__creat__27A4B434", columns={"creation_user_id"}), @ORM\Index(name="FK__t_infobox__permi__26B08FFB", columns={"permission_id"})})
 * @ORM\Entity
 */
class Infoboxes
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
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="text", type="text", length=0, nullable=true)
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

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


}
