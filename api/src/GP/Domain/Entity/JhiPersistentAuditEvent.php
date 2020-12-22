<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JhiPersistentAuditEvent
 *
 * @ORM\Table(name="jhi_persistent_audit_event", indexes={@ORM\Index(name="idx_persistent_audit_event", columns={"principal", "event_date"})})
 * @ORM\Entity
 */
class JhiPersistentAuditEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="event_id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventId;

    /**
     * @var string
     *
     * @ORM\Column(name="principal", type="string", length=50, nullable=false)
     */
    private $principal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="event_date", type="datetime", nullable=true)
     */
    private $eventDate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="event_type", type="string", length=255, nullable=true)
     */
    private $eventType;


}
