<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleAccount
 *
 * @ORM\Table(name="t_article_account")
 * @ORM\Entity
 */
class ArticleAccount
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
     * @ORM\Column(name="article_type_id", type="integer", nullable=true)
     */
    private $articleTypeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_id", type="integer", nullable=true)
     */
    private $articleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="channel", type="integer", nullable=true)
     */
    private $channel;

    /**
     * @var int|null
     *
     * @ORM\Column(name="account", type="integer", nullable=true)
     */
    private $account;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_porto", type="integer", nullable=true)
     */
    private $isPorto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="retailer", type="integer", nullable=true)
     */
    private $retailer;


}
