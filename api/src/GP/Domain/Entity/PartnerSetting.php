<?php

namespace App\GP\Domain\Entity;



/**
 * PartnerSetting
 */
class PartnerSetting
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $value;

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $partnerType;

    private $dropshippingPartner;

    private $provider;


}
