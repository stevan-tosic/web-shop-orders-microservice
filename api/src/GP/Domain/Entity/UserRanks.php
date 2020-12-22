<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRanks
 *
 * @ORM\Table(name="t_user_ranks", indexes={@ORM\Index(name="range", columns={"spending_from", "spending_to"})})
 * @ORM\Entity
 */
class UserRanks
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="spending_from", type="integer", nullable=false)
     */
    private $spendingFrom;

    /**
     * @var int
     *
     * @ORM\Column(name="spending_to", type="integer", nullable=false)
     */
    private $spendingTo;


}
