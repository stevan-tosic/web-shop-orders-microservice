<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TApiAccounts
 *
 * @ORM\Table(name="t_api_accounts", indexes={@ORM\Index(name="contact_id", columns={"contact_id"}), @ORM\Index(name="creation_user_id", columns={"creation_user_id"}), @ORM\Index(name="last_update_user_id", columns={"last_update_user_id"}), @ORM\Index(name="responsible_user_id", columns={"responsible_user_id"})})
 * @ORM\Entity
 */
class TApiAccounts
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="api_key", type="string", length=40, nullable=true)
     */
    private $apiKey;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=false)
     */
    private $creationDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update_date", type="datetime", nullable=false)
     */
    private $lastUpdateDate;

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
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsible_user_id", referencedColumnName="id")
     * })
     */
    private $responsibleUser;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="last_update_user_id", referencedColumnName="id")
     * })
     */
    private $lastUpdateUser;

    /**
     * @var \TAddress
     *
     * @ORM\ManyToOne(targetEntity="TAddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contact_id", referencedColumnName="ID")
     * })
     */
    private $contact;


}
