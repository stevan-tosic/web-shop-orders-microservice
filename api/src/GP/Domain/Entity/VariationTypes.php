<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VariationTypes
 *
 * @ORM\Table(name="t_variation_types")
 * @ORM\Entity
 */
class VariationTypes
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
     * @ORM\Column(name="name_0", type="string", length=255, nullable=true)
     */
    private $name0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_1", type="string", length=255, nullable=true)
     */
    private $name1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_2", type="string", length=255, nullable=true)
     */
    private $name2;


}
