<?php

namespace App\GP\Domain\Entity;



/**
 * Contactform
 */
class Contactform
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var int|null
     */
    private $orderId;

    /**
     * @var string|null
     */
    private $emailaddress;

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var string|null
     */
    private $message;

    /**
     * @var string|null
     */
    private $website;

    /**
     * @var \DateTime|null
     */
    private $date;

    /**
     * @var int|null
     */
    private $hostId;

    private $contactformSubject;


}
