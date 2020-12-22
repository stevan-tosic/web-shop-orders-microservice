<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TVideos
 *
 * @ORM\Table(name="t_videos", indexes={@ORM\Index(name="IX_t_videos_productID", columns={"article_id"})})
 * @ORM\Entity
 */
class TVideos
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
     * @ORM\Column(name="article_id", type="integer", nullable=true)
     */
    private $articleId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="videoID", type="string", length=50, nullable=true)
     */
    private $videoid;


}
