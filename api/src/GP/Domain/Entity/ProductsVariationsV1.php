<?php

namespace App\GP\Domain\Entity;



/**
 * ProductsVariationsV1
 */
class ProductsVariationsV1
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int|null
     */
    private $productid = '0';

    /**
     * @var string|null
     */
    private $option1value0;

    /**
     * @var string|null
     */
    private $option2value0;

    /**
     * @var string|null
     */
    private $ean;

    /**
     * @var string|null
     */
    private $brandnr;

    /**
     * @var string|null
     */
    private $distributornr;

    /**
     * @var string|null
     */
    private $distributortitle;

    /**
     * @var int|null
     */
    private $stock = '0';

    /**
     * @var int|null
     */
    private $minimumStock = '0';

    /**
     * @var string|null
     */
    private $option1value1;

    /**
     * @var string|null
     */
    private $option2value1;

    /**
     * @var string|null
     */
    private $option1value2;

    /**
     * @var string|null
     */
    private $option2value2;

    /**
     * @var int
     */
    private $stockReserved = '0';

    private $article;


}
