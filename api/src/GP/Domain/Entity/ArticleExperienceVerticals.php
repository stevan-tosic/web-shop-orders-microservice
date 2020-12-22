<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleExperienceVerticals
 *
 * @ORM\Table(name="t_article_experience_verticals", indexes={@ORM\Index(name="FK__t_article__last___2A8120DF", columns={"last_change_user_id"})})
 * @ORM\Entity
 */
class ArticleExperienceVerticals
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
     * @var float
     *
     * @ORM\Column(name="commission", type="float", precision=10, scale=0, nullable=false)
     */
    private $commission = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="when", type="text", length=0, nullable=true)
     */
    private $when;

    /**
     * @var string|null
     *
     * @ORM\Column(name="requirements", type="text", length=0, nullable=true)
     */
    private $requirements;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duration", type="text", length=0, nullable=true)
     */
    private $duration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="weather", type="text", length=0, nullable=true)
     */
    private $weather;

    /**
     * @var string|null
     *
     * @ORM\Column(name="equipment", type="text", length=0, nullable=true)
     */
    private $equipment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="participants", type="text", length=0, nullable=true)
     */
    private $participants;

    /**
     * @var string|null
     *
     * @ORM\Column(name="specials", type="text", length=0, nullable=true)
     */
    private $specials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="redeem_note", type="text", length=0, nullable=true)
     */
    private $redeemNote;

    /**
     * @var string|null
     *
     * @ORM\Column(name="offline_text", type="text", length=0, nullable=true)
     */
    private $offlineText;

    /**
     * @var bool
     *
     * @ORM\Column(name="box_is_text_listing", type="boolean", nullable=false)
     */
    private $boxIsTextListing = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_change_date", type="datetime", nullable=true)
     */
    private $lastChangeDate;

    /**
     * @var \TUsers
     *
     * @ORM\ManyToOne(targetEntity="TUsers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="last_change_user_id", referencedColumnName="id")
     * })
     */
    private $lastChangeUser;


}
