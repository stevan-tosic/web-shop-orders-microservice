<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPaymentSettings
 *
 * @ORM\Table(name="t_payment_settings", uniqueConstraints={@ORM\UniqueConstraint(name="payment_language", columns={"payment_id", "language_id"})}, indexes={@ORM\Index(name="languageFK_idx", columns={"language_id"}), @ORM\Index(name="paymentFK_idx", columns={"payment_id"})})
 * @ORM\Entity
 */
class TPaymentSettings
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active_footer", type="boolean", nullable=true)
     */
    private $activeFooter = '0';

    /**
     * @var \TLanguages
     *
     * @ORM\ManyToOne(targetEntity="TLanguages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     * })
     */
    private $language;

    /**
     * @var \TPayment
     *
     * @ORM\ManyToOne(targetEntity="TPayment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="ID")
     * })
     */
    private $payment;


}
