<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contactform
 *
 * @ORM\Table(name="t_contactform", indexes={@ORM\Index(name="FK_t_contactform_t_contactform_subjects", columns={"contactform_subject_id"})})
 * @ORM\Entity
 */
class Contactform
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
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="order_id", type="integer", nullable=true)
     */
    private $orderId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailaddress", type="string", length=100, nullable=true)
     */
    private $emailaddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=50, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=0, nullable=true)
     */
    private $message;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", length=50, nullable=true)
     */
    private $website;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var int|null
     *
     * @ORM\Column(name="host_id", type="integer", nullable=true)
     */
    private $hostId;

    /**
     * @var \TContactformSubjects
     *
     * @ORM\ManyToOne(targetEntity="TContactformSubjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contactform_subject_id", referencedColumnName="id")
     * })
     */
    private $contactformSubject;


}
