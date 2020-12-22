<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRetailoType
 *
 * @ORM\Table(name="t_retailo_type", indexes={@ORM\Index(name="FK_t_retailo_type_t_article", columns={"article_id"})})
 * @ORM\Entity
 */
class TRetailoType
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
     * @ORM\Column(name="codeID", type="string", length=50, nullable=true)
     */
    private $codeid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="channel", type="string", length=50, nullable=true)
     */
    private $channel;

    /**
     * @var \TArticleV1
     *
     * @ORM\ManyToOne(targetEntity="TArticleV1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="ID")
     * })
     */
    private $article;


}
