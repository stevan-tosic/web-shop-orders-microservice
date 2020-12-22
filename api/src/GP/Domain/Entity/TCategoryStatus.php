<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TCategoryStatus
 *
 * @ORM\Table(name="t_category_status")
 * @ORM\Entity
 */
class TCategoryStatus
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_redirect", type="boolean", nullable=true)
     */
    private $isRedirect;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=true)
     */
    private $isActive;

    /**
     * @var int|null
     *
     * @ORM\Column(name="redirect_code", type="integer", nullable=true)
     */
    private $redirectCode;


}
