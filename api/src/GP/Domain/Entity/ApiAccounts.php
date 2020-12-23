<?php

namespace App\GP\Domain\Entity;



/**
 * ApiAccounts
 */
class ApiAccounts
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
    private $description;

    /**
     * @var string|null
     */
    private $apiKey;

    /**
     * @var bool|null
     */
    private $active;

    /**
     * @var \DateTime
     */
    private $creationDate;

    /**
     * @var \DateTime
     */
    private $lastUpdateDate;

    private $creationUser;

    private $responsibleUser;

    private $lastUpdateUser;

    private $contact;


}
