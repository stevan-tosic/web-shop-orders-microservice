<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JhiPersistentAuditEvtData
 *
 * @ORM\Table(name="jhi_persistent_audit_evt_data", indexes={@ORM\Index(name="idx_persistent_audit_evt_data", columns={"event_id"})})
 * @ORM\Entity
 */
class JhiPersistentAuditEvtData
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=150, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var \JhiPersistentAuditEvent
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="JhiPersistentAuditEvent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="event_id", referencedColumnName="event_id")
     * })
     */
    private $event;


}
