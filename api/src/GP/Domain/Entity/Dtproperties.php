<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dtproperties
 *
 * @ORM\Table(name="dtproperties")
 * @ORM\Entity
 */
class Dtproperties
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="property", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $property;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objectid", type="integer", nullable=true)
     */
    private $objectid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uvalue", type="string", length=255, nullable=true)
     */
    private $uvalue;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lvalue", type="blob", length=0, nullable=true)
     */
    private $lvalue;

    /**
     * @var int
     *
     * @ORM\Column(name="version", type="integer", nullable=false)
     */
    private $version = '0';


}
