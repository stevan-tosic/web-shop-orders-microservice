<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TArticleLogs
 *
 * @ORM\Table(name="t_article_logs")
 * @ORM\Entity
 */
class TArticleLogs
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
     * @ORM\Column(name="article_id", type="integer", nullable=false)
     */
    private $articleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="data", type="string", length=1024, nullable=true)
     */
    private $data;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=1024, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="when", type="datetime", nullable=false)
     */
    private $when;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=128, nullable=false)
     */
    private $user;

    /**
     * @var int|null
     *
     * @ORM\Column(name="article_vertical_id", type="integer", nullable=true)
     */
    private $articleVerticalId;


}
