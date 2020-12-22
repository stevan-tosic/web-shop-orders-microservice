<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPayment
 *
 * @ORM\Table(name="t_payment", indexes={@ORM\Index(name="article_id_idx", columns={"article_id"})})
 * @ORM\Entity
 */
class TPayment
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="reihenfolge", type="integer", nullable=true)
     */
    private $reihenfolge = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="credit_check", type="integer", nullable=true)
     */
    private $creditCheck = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="account", type="integer", nullable=true)
     */
    private $account;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="datatrans", type="integer", nullable=true)
     */
    private $datatrans = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="datatrans_method", type="string", length=255, nullable=true)
     */
    private $datatransMethod;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_bill", type="boolean", nullable=true)
     */
    private $isBill = '0';

    /**
     * @var \TArticles
     *
     * @ORM\ManyToOne(targetEntity="TArticles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * })
     */
    private $article;


}
