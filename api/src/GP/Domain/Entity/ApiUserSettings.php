<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApiUserSettings
 *
 * @ORM\Table(name="t_api_user_settings")
 * @ORM\Entity
 */
class ApiUserSettings
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", length=255, nullable=false)
     */
    private $clientId;

    /**
     * @var int
     *
     * @ORM\Column(name="core_user_id", type="integer", nullable=false)
     */
    private $coreUserId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=1000, nullable=false)
     */
    private $value;


}
