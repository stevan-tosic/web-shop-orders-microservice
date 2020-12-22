<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TErlebnisboxenProducts
 *
 * @ORM\Table(name="t_erlebnisboxen_products", indexes={@ORM\Index(name="IX_t_erlebnisboxen_products", columns={"erlebnisboxID"}), @ORM\Index(name="IX_t_erlebnisboxen_products_1", columns={"article_id"})})
 * @ORM\Entity
 */
class TErlebnisboxenProducts
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
     * @ORM\Column(name="erlebnisboxID", type="integer", nullable=true)
     */
    private $erlebnisboxid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_id", type="integer", nullable=true)
     */
    private $articleId = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $active = true;


}
