<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TTopsellers
 *
 * @ORM\Table(name="t_topsellers")
 * @ORM\Entity
 */
class TTopsellers
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
     * @ORM\Column(name="productID", type="integer", nullable=true)
     */
    private $productid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="topsellerID", type="integer", nullable=true)
     */
    private $topsellerid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="language_nr", type="integer", nullable=true)
     */
    private $languageNr;


}
