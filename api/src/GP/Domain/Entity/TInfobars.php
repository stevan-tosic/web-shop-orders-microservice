<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TInfobars
 *
 * @ORM\Table(name="t_infobars")
 * @ORM\Entity
 */
class TInfobars
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
     * @ORM\Column(name="text", type="string", length=255, nullable=true)
     */
    private $text;

    /**
     * @var string|null
     *
     * @ORM\Column(name="layout", type="string", length=255, nullable=true)
     */
    private $layout;

    /**
     * @var int
     *
     * @ORM\Column(name="class_id", type="integer", nullable=false)
     */
    private $classId;

    /**
     * @var int
     *
     * @ORM\Column(name="type_id", type="integer", nullable=false)
     */
    private $typeId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="creation_date", type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="creation_user_id", type="integer", nullable=true)
     */
    private $creationUserId;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="last_change_date", type="datetime", nullable=true)
     */
    private $lastChangeDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_change_user_id", type="integer", nullable=true)
     */
    private $lastChangeUserId;

    /**
     * @var bool
     *
     * @ORM\Column(name="show_close_button", type="boolean", nullable=false, options={"default"="1"})
     */
    private $showCloseButton = true;

    /**
     * @var int
     *
     * @ORM\Column(name="lang", type="integer", nullable=false)
     */
    private $lang = '0';


}
