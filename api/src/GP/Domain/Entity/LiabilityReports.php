<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LiabilityReports
 *
 * @ORM\Table(name="t_liability_reports")
 * @ORM\Entity
 */
class LiabilityReports
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
     * @var \DateTime
     *
     * @ORM\Column(name="generation_date", type="date", nullable=false)
     */
    private $generationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="generated_by", type="string", length=255, nullable=false)
     */
    private $generatedBy;


}
