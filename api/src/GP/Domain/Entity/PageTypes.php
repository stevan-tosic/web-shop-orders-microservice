<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PageTypes
 *
 * @ORM\Table(name="t_page_types")
 * @ORM\Entity
 */
class PageTypes
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
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="nofollow", type="boolean", nullable=false)
     */
    private $nofollow = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="noindex", type="boolean", nullable=false)
     */
    private $noindex = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="sitemap", type="boolean", nullable=false)
     */
    private $sitemap = '0';


}
