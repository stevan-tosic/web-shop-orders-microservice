<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HostTypes
 *
 * @ORM\Table(name="t_host_types")
 * @ORM\Entity
 */
class HostTypes
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
     * @ORM\Column(name="name", type="string", length=120, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="short_name", type="string", length=30, nullable=false, options={"default"="web"})
     */
    private $shortName = 'web';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_shop", type="boolean", nullable=false, options={"default"="1"})
     */
    private $isShop = true;


}
