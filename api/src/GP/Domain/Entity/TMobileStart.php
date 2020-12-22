<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TMobileStart
 *
 * @ORM\Table(name="t_mobile_start")
 * @ORM\Entity
 */
class TMobileStart
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
     * @ORM\Column(name="title_0", type="text", length=0, nullable=true)
     */
    private $title0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_1", type="text", length=0, nullable=true)
     */
    private $title1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title_2", type="text", length=0, nullable=true)
     */
    private $title2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picture", type="text", length=0, nullable=true)
     */
    private $picture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_0", type="text", length=0, nullable=true)
     */
    private $url0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_1", type="text", length=0, nullable=true)
     */
    private $url1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="url_2", type="text", length=0, nullable=true)
     */
    private $url2;


}
