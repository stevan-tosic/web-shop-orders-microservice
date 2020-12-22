<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TLogsDatatrans
 *
 * @ORM\Table(name="t_logs_datatrans")
 * @ORM\Entity
 */
class TLogsDatatrans
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
     * @var string
     *
     * @ORM\Column(name="order_number", type="string", length=32, nullable=false)
     */
    private $orderNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=32, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=32, nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="host_id", type="integer", nullable=false)
     */
    private $hostId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="error_code", type="integer", nullable=true)
     */
    private $errorCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';


}
