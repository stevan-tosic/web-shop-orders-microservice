<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TArticles
 *
 * @ORM\Table(name="t_articles", indexes={@ORM\Index(name="FK__t_article__creat__11B57315", columns={"creation_user_id"}), @ORM\Index(name="FK__t_article__last___12A9974E", columns={"last_change_user_id"}), @ORM\Index(name="t_articles_article_experience_id_index", columns={"article_experience_id"}), @ORM\Index(name="t_articles_article_product_id_index", columns={"article_product_id"}), @ORM\Index(name="t_articles_article_type_id_index", columns={"article_type_id"}), @ORM\Index(name="t_articles_tax_id_index", columns={"tax_id"}), @ORM\Index(name="t_articles_variation_id_index", columns={"variation_id"})})
 * @ORM\Entity
 */
class TArticles
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
     * @var int|null
     *
     * @ORM\Column(name="article_experience_id", type="integer", nullable=true)
     */
    private $articleExperienceId;

    private $articleExperience;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_product_id", type="integer", nullable=true)
     */
    private $articleProductId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_type_id", type="integer", nullable=true)
     */
    private $articleTypeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="product_id", type="integer", nullable=true)
     */
    private $productId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tax_id", type="integer", nullable=true)
     */
    private $taxId;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="use_order_tax", type="boolean", nullable=true)
     */
    private $useOrderTax = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_change_date", type="datetime", nullable=true)
     */
    private $lastChangeDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="variation_id", type="integer", nullable=true)
     */
    private $variationId;

    /**
     * @var float
     *
     * @ORM\Column(name="total_revenue", type="float", precision=10, scale=0, nullable=false)
     */
    private $totalRevenue = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="redeemed_revenue", type="float", precision=10, scale=0, nullable=false)
     */
    private $redeemedRevenue = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="activation_date", type="datetime", nullable=true)
     */
    private $activationDate;

    /**
     * @var bool
     *
     * @ORM\Column(name="cho_article", type="boolean", nullable=false)
     */
    private $choArticle = '0';

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creation_user_id", referencedColumnName="id")
     * })
     */
    private $creationUser;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="last_change_user_id", referencedColumnName="id")
     * })
     */
    private $lastChangeUser;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="TMetaKeywords", inversedBy="article")
     * @ORM\JoinTable(name="t_meta_keywords_to_articles_map",
     *   joinColumns={
     *     @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="keyword_id", referencedColumnName="id")
     *   }
     * )
     */
    private $keyword;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->keyword = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
