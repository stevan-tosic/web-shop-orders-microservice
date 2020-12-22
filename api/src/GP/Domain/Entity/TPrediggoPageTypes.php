<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPrediggoPageTypes
 *
 * @ORM\Table(name="t_prediggo_page_types")
 * @ORM\Entity
 */
class TPrediggoPageTypes
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
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="prediggo_api_number", type="integer", nullable=false)
     */
    private $prediggoApiNumber;


}
