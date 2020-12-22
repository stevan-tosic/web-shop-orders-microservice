<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table(name="t_address", indexes={@ORM\Index(name="Email", columns={"email"}), @ORM\Index(name="t_address_user_id_fk", columns={"user_id"})})
 * @ORM\Entity
 */
class Address
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
     * @ORM\Column(name="title_id", type="integer", nullable=true)
     */
    private $titleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="company", type="string", length=150, nullable=true)
     */
    private $company;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_1", type="string", length=150, nullable=true)
     */
    private $address1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_2", type="string", length=150, nullable=true)
     */
    private $address2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=10, nullable=true)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=150, nullable=true)
     */
    private $location;

    /**
     * @var int
     *
     * @ORM\Column(name="country_id", type="integer", nullable=false, options={"default"="1"})
     */
    private $countryId = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=50, nullable=true)
     */
    private $phone;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birth_date", type="datetime", nullable=true)
     */
    private $birthDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="registration_date", type="datetime", nullable=true)
     */
    private $registrationDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="iban", type="string", length=34, nullable=true)
     */
    private $iban;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uid", type="string", length=50, nullable=true)
     */
    private $uid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="po_number", type="string", length=50, nullable=true)
     */
    private $poNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cost_center", type="string", length=50, nullable=true)
     */
    private $costCenter;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reference", type="string", length=50, nullable=true)
     */
    private $reference;

    /**
     * @var string|null
     *
     * @ORM\Column(name="department", type="string", length=50, nullable=true)
     */
    private $department;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}
