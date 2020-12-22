<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LogsCache
 *
 * @ORM\Table(name="t_logs_cache", indexes={@ORM\Index(name="StateMapping", columns={"state"}), @ORM\Index(name="t_logs_cache_item_id", columns={"item_id"}), @ORM\Index(name="t_logs_cache_item_type", columns={"item_type"})})
 * @ORM\Entity
 */
class LogsCache
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
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=512, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="source_type", type="string", length=512, nullable=false)
     */
    private $sourceType;

    /**
     * @var int
     *
     * @ORM\Column(name="source_id", type="integer", nullable=false)
     */
    private $sourceId;

    /**
     * @var string
     *
     * @ORM\Column(name="item_type", type="string", length=512, nullable=false)
     */
    private $itemType;

    /**
     * @var int
     *
     * @ORM\Column(name="item_id", type="integer", nullable=false)
     */
    private $itemId;

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="integer", nullable=false)
     */
    private $state;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;


}
