<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usergroups
 *
 * @ORM\Table(name="t_usergroups")
 * @ORM\Entity
 */
class Usergroups
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
     * @ORM\Column(name="name_0", type="string", length=255, nullable=false)
     */
    private $name0;

    /**
     * @var string
     *
     * @ORM\Column(name="name_1", type="string", length=255, nullable=false)
     */
    private $name1;

    /**
     * @var string
     *
     * @ORM\Column(name="name_2", type="string", length=255, nullable=false)
     */
    private $name2;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TUsers", mappedBy="usergroup")
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->user = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
