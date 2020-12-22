<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TUsedCodes
 *
 * @ORM\Table(name="t_used_codes", indexes={@ORM\Index(name="IX_t_used_codes", columns={"orderID"}), @ORM\Index(name="IX_t_used_codes_1", columns={"codeID"}), @ORM\Index(name="t_used_codes_orderID_index", columns={"orderID"})})
 * @ORM\Entity
 */
class TUsedCodes
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
     * @ORM\Column(name="orderID", type="integer", nullable=true)
     */
    private $orderid = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="codeID", type="integer", nullable=true)
     */
    private $codeid = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="usedAmount", type="float", precision=10, scale=0, nullable=true)
     */
    private $usedamount = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="restAmount", type="float", precision=10, scale=0, nullable=true)
     */
    private $restamount = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="usedAll", type="integer", nullable=true)
     */
    private $usedall;

    /**
     * @var int|null
     *
     * @ORM\Column(name="aktiv", type="integer", nullable=true)
     */
    private $aktiv = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cart_id", type="integer", nullable=true)
     */
    private $cartId;


}
