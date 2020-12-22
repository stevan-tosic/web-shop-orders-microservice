<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TDunningStepAddArticles
 *
 * @ORM\Table(name="t_dunning_step_add_articles", indexes={@ORM\Index(name="t_dunning_step_add_article_article_id", columns={"article_id"}), @ORM\Index(name="t_dunning_step_add_article_step_id", columns={"step_id"})})
 * @ORM\Entity
 */
class TDunningStepAddArticles
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
     * @var \TDunningSteps
     *
     * @ORM\ManyToOne(targetEntity="TDunningSteps")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="step_id", referencedColumnName="id")
     * })
     */
    private $step;

    /**
     * @var \TArticles
     *
     * @ORM\ManyToOne(targetEntity="TArticles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     * })
     */
    private $article;


}
