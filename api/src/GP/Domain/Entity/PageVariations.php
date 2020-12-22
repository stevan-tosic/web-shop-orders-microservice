<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageVariations
 *
 * @ORM\Table(name="t_page_variations", indexes={@ORM\Index(name="active_version_id_index", columns={"active_version_id"}), @ORM\Index(name="slug_index", columns={"slug"}), @ORM\Index(name="t_page_variations_host_id_index", columns={"host_id"}), @ORM\Index(name="t_page_variations_page_id_index", columns={"page_id"})})
 * @ORM\Entity
 */
class PageVariations
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
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var int
     *
     * @ORM\Column(name="creation_user_id", type="integer", nullable=false)
     */
    private $creationUserId;

    /**
     * @var int
     *
     * @ORM\Column(name="last_change_user_id", type="integer", nullable=false)
     */
    private $lastChangeUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_change_date", type="datetime", nullable=true)
     */
    private $lastChangeDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="active_version_id", type="integer", nullable=true)
     */
    private $activeVersionId;

    /**
     * @var int
     *
     * @ORM\Column(name="host_id", type="integer", nullable=false)
     */
    private $hostId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @var int
     *
     * @ORM\Column(name="page_id", type="integer", nullable=false)
     */
    private $pageId;


}
