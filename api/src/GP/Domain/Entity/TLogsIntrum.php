<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TLogsIntrum
 *
 * @ORM\Table(name="t_logs_intrum")
 * @ORM\Entity
 */
class TLogsIntrum
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="order_number", type="string", length=32, nullable=true)
     */
    private $orderNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="complete_response", type="text", length=0, nullable=true)
     */
    private $completeResponse;

    /**
     * @var int|null
     *
     * @ORM\Column(name="request_status", type="integer", nullable=true)
     */
    private $requestStatus;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;


}
