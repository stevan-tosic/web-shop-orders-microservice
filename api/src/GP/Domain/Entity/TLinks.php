<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TLinks
 *
 * @ORM\Table(name="t_links", indexes={@ORM\Index(name="IX_t_links", columns={"categorieID"}), @ORM\Index(name="IX_t_links_1", columns={"productID"})})
 * @ORM\Entity
 */
class TLinks
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
    private $productid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="categorieID", type="integer", nullable=true)
     */
    private $categorieid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="levelID", type="integer", nullable=true)
     */
    private $levelid = '0';


}
