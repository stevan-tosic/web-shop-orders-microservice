<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShippingStatus
 *
 * @ORM\Table(name="t_shipping_status")
 * @ORM\Entity
 */
class ShippingStatus
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
     * @ORM\Column(name="status_0", type="string", length=50, nullable=true)
     */
    private $status0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_1", type="string", length=50, nullable=true)
     */
    private $status1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_2", type="string", length=50, nullable=true)
     */
    private $status2;


}
