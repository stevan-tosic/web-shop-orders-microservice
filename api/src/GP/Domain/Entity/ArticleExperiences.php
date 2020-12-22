<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleExperiences
 *
 * @ORM\Table(name="t_article_experiences", indexes={@ORM\Index(name="FK__t_article__last___298CFCA6", columns={"last_change_user_id"}), @ORM\Index(name="location_id_index", columns={"location_id"}), @ORM\Index(name="provider_id_index", columns={"provider_id"})})
 * @ORM\Entity
 */
class ArticleExperiences
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    private $article;

    /**
     * @var int|null
     *
     * @ORM\Column(name="location_id", type="integer", nullable=true)
     */
    private $locationId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_everywhere", type="boolean", nullable=false)
     */
    private $isEverywhere = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="people", type="integer", nullable=true)
     */
    private $people;

    /**
     * @var float
     *
     * @ORM\Column(name="commission_offline", type="float", precision=10, scale=0, nullable=false)
     */
    private $commissionOffline = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_offline", type="boolean", nullable=false)
     */
    private $isOffline = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_ticket", type="boolean", nullable=false)
     */
    private $isTicket = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="provider_id", type="integer", nullable=true)
     */
    private $providerId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="provider_sub_id", type="integer", nullable=true)
     */
    private $providerSubId;

    /**
     * @var bool
     *
     * @ORM\Column(name="box_is_virtual", type="boolean", nullable=false)
     */
    private $boxIsVirtual = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="price_offline", type="float", precision=10, scale=0, nullable=false)
     */
    private $priceOffline = '0';

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
