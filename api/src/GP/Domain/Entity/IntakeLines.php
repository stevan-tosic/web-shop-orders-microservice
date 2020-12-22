<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IntakeLines
 *
 * @ORM\Table(name="t_intake_lines", indexes={@ORM\Index(name="IX_t_intake_lines_intake_id", columns={"intake_id"}), @ORM\Index(name="IX_t_intake_lines_product_id", columns={"product_variation_id"}), @ORM\Index(name="IX_t_intake_lines_status_id", columns={"status_id"})})
 * @ORM\Entity
 */
class IntakeLines
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
     * @ORM\Column(name="intake_id", type="integer", nullable=true)
     */
    private $intakeId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_variation_id", type="integer", nullable=true)
     */
    private $productVariationId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="status_id", type="integer", nullable=true)
     */
    private $statusId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=0, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="delivery_date", type="datetime", nullable=true)
     */
    private $deliveryDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="cleared_date", type="datetime", nullable=true)
     */
    private $clearedDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantity_delivered", type="integer", nullable=true)
     */
    private $quantityDelivered = '0';


}
