<?php

namespace App\GP\Domain\Entity;



/**
 * DropshippingPartnerStatus
 */
class DropshippingPartnerStatus
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $value;

    /**
     * @var int|null
     */
    private $sortOrder;

    private $partner;


}
