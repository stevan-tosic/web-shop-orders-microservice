<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 *
 * @ORM\Table(name="t_tags")
 * @ORM\Entity
 */
class Tags
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
     * @ORM\Column(name="tag_type_id", type="integer", nullable=false)
     */
    private $tagTypeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_0", type="string", length=255, nullable=true)
     */
    private $name0;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_1", type="string", length=255, nullable=true)
     */
    private $name1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name_2", type="string", length=255, nullable=true)
     */
    private $name2;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault = '0';


}
