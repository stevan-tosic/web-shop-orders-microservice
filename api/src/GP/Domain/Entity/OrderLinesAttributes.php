<?php

namespace App\GP\Domain\Entity;



/**
 * OrderLinesAttributes
 */
class OrderLinesAttributes
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $orderLinesId;

    /**
     * @var string|null
     */
    private $value;

    /**
     * @var int|null
     */
    private $attributeId;

    /**
     * @var int|null
     */
    private $cartLineId;

    private $attributeValue;


}
