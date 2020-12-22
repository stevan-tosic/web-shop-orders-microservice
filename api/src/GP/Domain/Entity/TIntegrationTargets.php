<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TIntegrationTargets
 *
 * @ORM\Table(name="t_integration_targets")
 * @ORM\Entity
 */
class TIntegrationTargets
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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=256, nullable=false)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="method", type="string", length=8, nullable=false)
     */
    private $method;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
     */
    private $sortOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="test_id", type="integer", nullable=false)
     */
    private $testId;


}
