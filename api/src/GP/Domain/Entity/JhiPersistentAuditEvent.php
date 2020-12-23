<?php

namespace App\GP\Domain\Entity;



/**
 * JhiPersistentAuditEvent
 */
class JhiPersistentAuditEvent
{
    /**
     * @var int
     */
    private $eventId;

    /**
     * @var string
     */
    private $principal;

    /**
     * @var \DateTime|null
     */
    private $eventDate;

    /**
     * @var string|null
     */
    private $eventType;


}
