<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PublicHolidayGroups
 *
 * @ORM\Table(name="t_public_holiday_groups")
 * @ORM\Entity
 */
class PublicHolidayGroups
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
     * @var bool|null
     *
     * @ORM\Column(name="hotline", type="boolean", nullable=true)
     */
    private $hotline;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="delivery", type="boolean", nullable=true)
     */
    private $delivery;


}
