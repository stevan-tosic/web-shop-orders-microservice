<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * I18n
 *
 * @ORM\Table(name="t_i18n")
 * @ORM\Entity
 */
class I18n
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="de", type="text", length=65535, nullable=true)
     */
    private $de;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fr", type="text", length=65535, nullable=true)
     */
    private $fr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="it", type="text", length=65535, nullable=true)
     */
    private $it;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="javascript", type="boolean", nullable=true)
     */
    private $javascript;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=false)
     */
    private $path;


}
