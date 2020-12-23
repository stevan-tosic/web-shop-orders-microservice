<?php

namespace App\GP\Domain\Entity;



/**
 * IntakeLines
 */
class IntakeLines
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $intakeId = '0';

    /**
     * @var int|null
     */
    private $productVariationId = '0';

    /**
     * @var int|null
     */
    private $statusId = '0';

    /**
     * @var int|null
     */
    private $quantity = '0';

    /**
     * @var string|null
     */
    private $comment;

    /**
     * @var \DateTime|null
     */
    private $deliveryDate;

    /**
     * @var \DateTime|null
     */
    private $clearedDate;

    /**
     * @var int|null
     */
    private $quantityDelivered = '0';


}
