<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPrediggoUpdatedVerticals
 *
 * @ORM\Table(name="t_prediggo_updated_verticals", indexes={@ORM\Index(name="vertical_id", columns={"vertical_id"})})
 * @ORM\Entity
 */
class TPrediggoUpdatedVerticals
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
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \TArticleVerticals
     *
     * @ORM\ManyToOne(targetEntity="TArticleVerticals")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vertical_id", referencedColumnName="id")
     * })
     */
    private $vertical;


}
