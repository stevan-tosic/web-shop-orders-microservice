<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TAdsPosition
 *
 * @ORM\Table(name="t_ads_position")
 * @ORM\Entity
 */
class TAdsPosition
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
     * @ORM\Column(name="cat", type="integer", nullable=true)
     */
    private $cat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="royalID", type="integer", nullable=true)
     */
    private $royalid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="language_nr", type="integer", nullable=true)
     */
    private $languageNr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_articles", type="integer", nullable=true)
     */
    private $maxArticles;

    /**
     * @var int|null
     *
     * @ORM\Column(name="min_articles", type="integer", nullable=true)
     */
    private $minArticles;

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="integer", nullable=true)
     */
    private $active;


}
