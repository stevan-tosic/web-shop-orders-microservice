<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CheckoutGroups
 *
 * @ORM\Table(name="t_checkout_groups", indexes={@ORM\Index(name="category_id", columns={"category_id"}), @ORM\Index(name="t_checkout_groups_created_by_fk", columns={"created_by"}), @ORM\Index(name="t_checkout_groups_description_id_fk", columns={"description_id"}), @ORM\Index(name="t_checkout_groups_updated_by_fk", columns={"updated_by"}), @ORM\Index(name="title_id", columns={"title_id"})})
 * @ORM\Entity
 */
class CheckoutGroups
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var bool
     *
     * @ORM\Column(name="standalone", type="boolean", nullable=false)
     */
    private $standalone = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="multiple", type="boolean", nullable=false)
     */
    private $multiple = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="mandatory", type="boolean", nullable=false, options={"default"="1"})
     */
    private $mandatory = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="skip_choice", type="boolean", nullable=false)
     */
    private $skipChoice = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="min_articles", type="integer", nullable=false, options={"default"="3"})
     */
    private $minArticles = '3';

    /**
     * @var int
     *
     * @ORM\Column(name="max_articles", type="integer", nullable=false, options={"default"="6"})
     */
    private $maxArticles = '6';

    /**
     * @var bool
     *
     * @ORM\Column(name="quantifiable", type="boolean", nullable=false)
     */
    private $quantifiable = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="credit_check_required", type="boolean", nullable=false)
     */
    private $creditCheckRequired = '0';

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
     * @var \TI18n
     *
     * @ORM\ManyToOne(targetEntity="TI18n")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="description_id", referencedColumnName="id")
     * })
     */
    private $description;

    /**
     * @var \TI18n
     *
     * @ORM\ManyToOne(targetEntity="TI18n")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="title_id", referencedColumnName="id")
     * })
     */
    private $title;

    /**
     * @var \TCheckoutGroupsCategories
     *
     * @ORM\ManyToOne(targetEntity="TCheckoutGroupsCategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * })
     */
    private $category;


}
