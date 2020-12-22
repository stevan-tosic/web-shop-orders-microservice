<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VariationValues
 *
 * @ORM\Table(name="t_variation_values")
 * @ORM\Entity
 */
class VariationValues
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
     * @var int|null
     *
     * @ORM\Column(name="type_id", type="integer", nullable=true)
     */
    private $typeId;

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

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_generic", type="boolean", nullable=true)
     */
    private $isGeneric = '0';


}
