<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TArticleV1
 *
 * @ORM\Table(name="t_article_v1", indexes={@ORM\Index(name="FK_t_article_t_article", columns={"article_type_id"})})
 * @ORM\Entity
 */
class TArticleV1
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
     * @var string|null
     *
     * @ORM\Column(name="name_0", type="string", length=150, nullable=true)
     */
    private $name0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_1", type="string", length=150, nullable=true)
     */
    private $name1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_2", type="string", length=150, nullable=true)
     */
    private $name2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_id", type="integer", nullable=true)
     */
    private $productId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_sold_out", type="boolean", nullable=true)
     */
    private $isSoldOut;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="creation_user_id", type="integer", nullable=true)
     */
    private $creationUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_change_date", type="datetime", nullable=true)
     */
    private $lastChangeDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_change_user_id", type="integer", nullable=true)
     */
    private $lastChangeUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="first_activation_date_0", type="datetime", nullable=true)
     */
    private $firstActivationDate0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="first_activation_user_id_0", type="integer", nullable=true)
     */
    private $firstActivationUserId0;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="first_activation_date_1", type="datetime", nullable=true)
     */
    private $firstActivationDate1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="first_activation_user_id_1", type="integer", nullable=true)
     */
    private $firstActivationUserId1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="first_activation_date_2", type="datetime", nullable=true)
     */
    private $firstActivationDate2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="first_activation_user_id_2", type="integer", nullable=true)
     */
    private $firstActivationUserId2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_activation_date_0", type="datetime", nullable=true)
     */
    private $lastActivationDate0;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_activation_user_id_0", type="integer", nullable=true)
     */
    private $lastActivationUserId0;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_activation_date_1", type="datetime", nullable=true)
     */
    private $lastActivationDate1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_activation_user_id_1", type="integer", nullable=true)
     */
    private $lastActivationUserId1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_activation_date_2", type="datetime", nullable=true)
     */
    private $lastActivationDate2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_activation_user_id_2", type="integer", nullable=true)
     */
    private $lastActivationUserId2;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="google_shopping_enabled", type="boolean", nullable=true)
     */
    private $googleShoppingEnabled;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_status_id", type="integer", nullable=true)
     */
    private $articleStatusId;

    /**
     * @var \TArticleType
     *
     * @ORM\ManyToOne(targetEntity="TArticleType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_type_id", referencedColumnName="ID")
     * })
     */
    private $articleType;


}
