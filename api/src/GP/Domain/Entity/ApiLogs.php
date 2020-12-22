<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApiLogs
 *
 * @ORM\Table(name="t_api_logs", indexes={@ORM\Index(name="t_api_logs_created_at_index", columns={"created_at"}), @ORM\Index(name="t_api_logs_t_api_accounts_id_fk", columns={"api_account_id"})})
 * @ORM\Entity
 */
class ApiLogs
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
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="request", type="text", length=65535, nullable=true)
     */
    private $request;

    /**
     * @var string|null
     *
     * @ORM\Column(name="response", type="text", length=65535, nullable=true)
     */
    private $response;

    /**
     * @var string|null
     *
     * @ORM\Column(name="order_number", type="string", length=32, nullable=true)
     */
    private $orderNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_code", type="string", length=10, nullable=true)
     */
    private $statusCode;

    /**
     * @var \TApiAccounts
     *
     * @ORM\ManyToOne(targetEntity="TApiAccounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="api_account_id", referencedColumnName="id")
     * })
     */
    private $apiAccount;


}
