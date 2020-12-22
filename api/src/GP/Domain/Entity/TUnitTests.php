<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TUnitTests
 *
 * @ORM\Table(name="t_unit_tests")
 * @ORM\Entity
 */
class TUnitTests
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
     * @ORM\Column(name="coverage_report", type="string", length=32, nullable=true, options={"fixed"=true})
     */
    private $coverageReport;

    /**
     * @var bool
     *
     * @ORM\Column(name="started_manually", type="boolean", nullable=false)
     */
    private $startedManually;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var int
     *
     * @ORM\Column(name="failed_tests", type="integer", nullable=false)
     */
    private $failedTests;

    /**
     * @var int
     *
     * @ORM\Column(name="passed_tests", type="integer", nullable=false)
     */
    private $passedTests;

    /**
     * @var string|null
     *
     * @ORM\Column(name="who", type="string", length=255, nullable=true)
     */
    private $who;


}
