<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Brands
 *
 * @ORM\Table(name="t_brands")
 * @ORM\Entity
 */
class Brands
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
     * @ORM\Column(name="brand", type="string", length=50, nullable=true)
     */
    private $brand;

    /**
     * @var int|null
     *
     * @ORM\Column(name="show_logo", type="integer", nullable=true)
     */
    private $showLogo = '0';


}
