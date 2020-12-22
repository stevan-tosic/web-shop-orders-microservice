<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPages
 *
 * @ORM\Table(name="t_pages", indexes={@ORM\Index(name="t_pages_host_group_id_index", columns={"host_group_id"}), @ORM\Index(name="t_pages_page_type_id_index", columns={"page_type_id"})})
 * @ORM\Entity
 */
class TPages
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
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="page_type_id", type="integer", nullable=false)
     */
    private $pageTypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="host_group_id", type="integer", nullable=false)
     */
    private $hostGroupId;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_homepage", type="boolean", nullable=false)
     */
    private $isHomepage = '0';


}
