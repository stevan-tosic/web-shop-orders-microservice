<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleReservedStockChanges
 *
 * @ORM\Table(name="t_article_reserved_stock_changes", indexes={@ORM\Index(name="order_line_article_reserved_stock_changes", columns={"order_line_id"})})
 * @ORM\Entity
 */
class ArticleReservedStockChanges
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
     * @ORM\Column(name="article_id", type="integer", nullable=false)
     */
    private $articleId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var int
     *
     * @ORM\Column(name="order_line_id", type="integer", nullable=false)
     */
    private $orderLineId;

    /**
     * @var string
     *
     * @ORM\Column(name="lls_file", type="string", length=255, nullable=false)
     */
    private $llsFile;

    /**
     * @var int
     *
     * @ORM\Column(name="reserved_change", type="integer", nullable=false)
     */
    private $reservedChange;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="log_date", type="datetime", nullable=true)
     */
    private $logDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=0, nullable=true)
     */
    private $data;


}
