<?php

namespace App\GP\Domain\Entity;



/**
 * ApiLogs
 */
class ApiLogs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $path;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $request;

    /**
     * @var string|null
     */
    private $response;

    /**
     * @var string|null
     */
    private $orderNumber;

    /**
     * @var string|null
     */
    private $statusCode;

    private $apiAccount;


}
