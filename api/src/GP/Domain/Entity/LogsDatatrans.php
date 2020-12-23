<?php

namespace App\GP\Domain\Entity;



/**
 * LogsDatatrans
 */
class LogsDatatrans
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $status;

    /**
     * @var int
     */
    private $hostId;

    /**
     * @var int|null
     */
    private $errorCode;

    /**
     * @var \DateTime|null
     */
    private $date = 'CURRENT_TIMESTAMP';


}
