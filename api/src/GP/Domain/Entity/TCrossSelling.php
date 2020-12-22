<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TCrossSelling
 *
 * @ORM\Table(name="t_cross_selling", indexes={@ORM\Index(name="IX_t_cross_selling_cross_selling_id", columns={"cross_selling_id"}), @ORM\Index(name="IX_t_cross_selling_product_id", columns={"product_id"})})
 * @ORM\Entity
 */
class TCrossSelling
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
     * @ORM\Column(name="product_id", type="integer", nullable=true)
     */
    private $productId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cross_selling_id", type="integer", nullable=true)
     */
    private $crossSellingId = '0';


}
