<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDistributors
 *
 * @ORM\Table(name="t_distributors", indexes={@ORM\Index(name="FK__t_distrib__curre__0ED9066A", columns={"currency_id"}), @ORM\Index(name="FK__t_distrib__respo__2898D86D", columns={"responsible_person_id"}), @ORM\Index(name="FK_t_distributors_t_address", columns={"address_id"})})
 * @ORM\Entity
 */
class TDistributors
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
     * @ORM\Column(name="address_1", type="string", length=100, nullable=true)
     */
    private $address1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address_2", type="string", length=100, nullable=true)
     */
    private $address2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var int|null
     *
     * @ORM\Column(name="country", type="integer", nullable=true)
     */
    private $country = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="company", type="string", length=100, nullable=true)
     */
    private $company;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="homepage", type="string", length=100, nullable=true)
     */
    private $homepage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=100, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="notes", type="text", length=0, nullable=true)
     */
    private $notes;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="text", length=0, nullable=true)
     */
    private $phone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="title", type="integer", nullable=true)
     */
    private $title = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=50, nullable=true)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_costs_share", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $importCostsShare;

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
     * @var \TCurrencies
     *
     * @ORM\ManyToOne(targetEntity="TCurrencies")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="currency_id", referencedColumnName="id")
     * })
     */
    private $currency;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="responsible_person_id", referencedColumnName="id")
     * })
     */
    private $responsiblePerson;


}
