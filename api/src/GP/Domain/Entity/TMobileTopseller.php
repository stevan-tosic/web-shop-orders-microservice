<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TMobileTopseller
 *
 * @ORM\Table(name="t_mobile_topseller")
 * @ORM\Entity
 */
class TMobileTopseller
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
     * @var int|null
     *
     * @ORM\Column(name="articleID", type="integer", nullable=true)
     */
    private $articleid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position;

    /**
     * @var int|null
     *
     * @ORM\Column(name="language", type="integer", nullable=true)
     */
    private $language;


}
