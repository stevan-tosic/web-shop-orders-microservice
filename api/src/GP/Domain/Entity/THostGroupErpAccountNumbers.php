<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * THostGroupErpAccountNumbers
 *
 * @ORM\Table(name="t_host_group_erp_account_numbers", indexes={@ORM\Index(name="fk_order_numbers_article_type", columns={"article_type_id"}), @ORM\Index(name="fk_order_numbers_host_group", columns={"host_group_id"})})
 * @ORM\Entity
 */
class THostGroupErpAccountNumbers
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
     * @ORM\Column(name="account_number", type="string", length=45, nullable=false)
     */
    private $accountNumber;

    /**
     * @var \TArticleType
     *
     * @ORM\ManyToOne(targetEntity="TArticleType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_type_id", referencedColumnName="ID")
     * })
     */
    private $articleType;

    /**
     * @var \THostGroups
     *
     * @ORM\ManyToOne(targetEntity="THostGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="host_group_id", referencedColumnName="id")
     * })
     */
    private $hostGroup;


}
