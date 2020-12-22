<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contests
 *
 * @ORM\Table(name="t_contests")
 * @ORM\Entity
 */
class Contests
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
     * @var string|null
     *
     * @ORM\Column(name="title_0", type="string", length=255, nullable=true)
     */
    private $title0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_1", type="string", length=255, nullable=true)
     */
    private $title1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_2", type="string", length=255, nullable=true)
     */
    private $title2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_0", type="string", length=255, nullable=true)
     */
    private $description0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_1", type="string", length=255, nullable=true)
     */
    private $description1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description_2", type="string", length=255, nullable=true)
     */
    private $description2;


}
