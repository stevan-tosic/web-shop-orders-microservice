<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderLogs
 *
 * @ORM\Table(name="t_order_logs", indexes={@ORM\Index(name="fk_t_order_logs_order_line_id_t_order_lines_id", columns={"order_line_id"}), @ORM\Index(name="fk_t_order_logs_partner_id_t_dropshipping_partners_id", columns={"partner_id"})})
 * @ORM\Entity
 */
class OrderLogs
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
     * @ORM\Column(name="order_id", type="integer", nullable=false)
     */
    private $orderId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="text", length=65535, nullable=true)
     */
    private $data;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=1024, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="when", type="datetime", nullable=false)
     */
    private $when;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=128, nullable=false)
     */
    private $user;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_top_comment", type="boolean", nullable=true, options={"default"="b'0'"})
     */
    private $isTopComment = 'b\'0\'';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="inactive_date", type="datetime", nullable=true, options={"default"="now()"})
     */
    private $inactiveDate = 'now()';

    /**
     * @var \TOrderLines
     *
     * @ORM\ManyToOne(targetEntity="TOrderLines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_line_id", referencedColumnName="ID")
     * })
     */
    private $orderLine;

    /**
     * @var \TDropshippingPartners
     *
     * @ORM\ManyToOne(targetEntity="TDropshippingPartners")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="partner_id", referencedColumnName="ID")
     * })
     */
    private $partner;


}
