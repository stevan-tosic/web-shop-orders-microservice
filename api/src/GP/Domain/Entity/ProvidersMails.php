<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProvidersMails
 *
 * @ORM\Table(name="t_providers_mails", indexes={@ORM\Index(name="IX_t_providers_mails", columns={"providerID"})})
 * @ORM\Entity
 */
class ProvidersMails
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
     * @ORM\Column(name="providerID", type="integer", nullable=true)
     */
    private $providerid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", length=200, nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="message", type="text", length=0, nullable=true)
     */
    private $message;


}
