<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ErlebnisboxenRetail
 *
 * @ORM\Table(name="t_erlebnisboxen_retail")
 * @ORM\Entity
 */
class ErlebnisboxenRetail
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
     * @ORM\Column(name="retailer", type="string", length=50, nullable=true)
     */
    private $retailer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=50, nullable=true)
     */
    private $code;


}
