<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TCheckoutGroupsArticles
 *
 * @ORM\Table(name="t_checkout_groups_articles", uniqueConstraints={@ORM\UniqueConstraint(name="checkout_group_id_article_id", columns={"checkout_group_id", "article_id"})}, indexes={@ORM\Index(name="article_id", columns={"article_id"}), @ORM\Index(name="IDX_694D3C63D7717B3B", columns={"checkout_group_id"})})
 * @ORM\Entity
 */
class TCheckoutGroupsArticles
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
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="default", type="boolean", nullable=true)
     */
    private $default = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var int
     *
     * @ORM\Column(name="default_order", type="integer", nullable=false)
     */
    private $defaultOrder = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="created_by", type="integer", nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $createdAt = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="updated_by", type="integer", nullable=true)
     */
    private $updatedBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \TCheckoutGroups
     *
     * @ORM\ManyToOne(targetEntity="TCheckoutGroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="checkout_group_id", referencedColumnName="id")
     * })
     */
    private $checkoutGroup;

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
