<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THosts
 *
 * @ORM\Table(name="t_hosts", uniqueConstraints={@ORM\UniqueConstraint(name="t_hosts_host_uindex", columns={"host"})}, indexes={@ORM\Index(name="t_hosts_default_layout_id_index", columns={"default_layout_id"}), @ORM\Index(name="t_hosts_host_group_id_index", columns={"host_group_id"}), @ORM\Index(name="t_hosts_language_id_index", columns={"language_id"}), @ORM\Index(name="t_hosts_prioriy", columns={"priority"})})
 * @ORM\Entity
 */
class THosts
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
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="host", type="string", length=50, nullable=true)
     */
    private $host;

    /**
     * @var string|null
     *
     * @ORM\Column(name="short_name", type="string", length=50, nullable=true)
     */
    private $shortName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="language_id", type="integer", nullable=true)
     */
    private $languageId;

    /**
     * @var int
     *
     * @ORM\Column(name="host_group_id", type="integer", nullable=false)
     */
    private $hostGroupId;

    /**
     * @var int
     *
     * @ORM\Column(name="default_layout_id", type="integer", nullable=false, options={"default"="1"})
     */
    private $defaultLayoutId = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="has_bill_logo", type="boolean", nullable=false)
     */
    private $hasBillLogo = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="popularity_days", type="string", length=255, nullable=true)
     */
    private $popularityDays;

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_checkout_layout_id", type="integer", nullable=true)
     */
    private $defaultCheckoutLayoutId;

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="integer", nullable=false, options={"default"="50","unsigned"=true})
     */
    private $priority = '50';

    /**
     * @var bool
     *
     * @ORM\Column(name="cho_enabled", type="boolean", nullable=false)
     */
    private $choEnabled = '0';


}
