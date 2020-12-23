<?php

namespace App\GP\Domain\Entity;



/**
 * ArticleReservedStockChanges
 */
class ArticleReservedStockChanges
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $articleId;

    /**
     * @var int
     */
    private $orderId;

    /**
     * @var int
     */
    private $orderLineId;

    /**
     * @var string
     */
    private $llsFile;

    /**
     * @var int
     */
    private $reservedChange;

    /**
     * @var \DateTime|null
     */
    private $logDate;

    /**
     * @var string|null
     */
    private $data;


}
