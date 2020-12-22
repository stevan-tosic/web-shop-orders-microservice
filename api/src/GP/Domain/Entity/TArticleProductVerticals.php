<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TArticleProductVerticals
 *
 * @ORM\Table(name="t_article_product_verticals", indexes={@ORM\Index(name="FK__t_article__last___2C696951", columns={"last_change_user_id"})})
 * @ORM\Entity
 */
class TArticleProductVerticals
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_change_date", type="datetime", nullable=true)
     */
    private $lastChangeDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="minimum_order_quantity", type="integer", nullable=true, options={"default"="1"})
     */
    private $minimumOrderQuantity = '1';

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
