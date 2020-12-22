<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TCheckoutGroupsRelations
 *
 * @ORM\Table(name="t_checkout_groups_relations", uniqueConstraints={@ORM\UniqueConstraint(name="checkout_group_id_host_id_article_type_id", columns={"checkout_group_id", "host_id", "article_type_id"})}, indexes={@ORM\Index(name="article_type_id", columns={"article_type_id"}), @ORM\Index(name="host_id_article_type_id_idx", columns={"host_id", "article_type_id"}), @ORM\Index(name="override_article_id_idx", columns={"override_article_id"}), @ORM\Index(name="t_checkout_groups_relations_created_by_fk3", columns={"created_by"}), @ORM\Index(name="IDX_8368F6FDD7717B3B", columns={"checkout_group_id"}), @ORM\Index(name="IDX_8368F6FD1FB8D185", columns={"host_id"})})
 * @ORM\Entity
 */
class TCheckoutGroupsRelations
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
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $active = true;

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
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     * })
     */
    private $createdBy;

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
     * @var \THosts
     *
     * @ORM\ManyToOne(targetEntity="THosts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="host_id", referencedColumnName="id")
     * })
     */
    private $host;

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
     * @var \TArticles
     *
     * @ORM\ManyToOne(targetEntity="TArticles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="override_article_id", referencedColumnName="id")
     * })
     */
    private $overrideArticle;


}
