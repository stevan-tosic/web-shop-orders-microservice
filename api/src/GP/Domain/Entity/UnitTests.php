<?php

namespace App\GP\Domain\Entity;



/**
 * UnitTests
 */
class UnitTests
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $coverageReport;

    /**
     * @var bool
     */
    private $startedManually;

    /**
     * @var \DateTime
     */
    private $timestamp;

    /**
     * @var int
     */
    private $failedTests;

    /**
     * @var int
     */
    private $passedTests;

    /**
     * @var string|null
     */
    private $who;


}
