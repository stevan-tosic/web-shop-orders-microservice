<?php declare(strict_types=1);

namespace App\Core\Domain\Entity\Order;

use App\Core\Domain\Entity\Address;
use App\Core\Domain\Entity\BillingStatus;
use App\Core\Domain\Entity\Host;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\PersistentCollection;

/**
 * Class Order
 */
class Order
{
    /** @var int */
    private $id;

    /** @var float */
    private $total;

    /** @var bool */
    private $isActive;

    /** @var \DateTime */
    private $createdAt;

    /** @var BillingStatus */
    private $billingStatus;

    /** @var Address */
    private $billingAddress;

    /** @var Address */
    private $deliveryAddress;

    /** @var PersistentCollection */
    private $orderLines;

    /** @var Host */
    private $host;

    /** @var \DateTime */
    private $cancellationDate;

    /**
     * Order constructor.
     */
    public function __construct()
    {
        $this->orderLines = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive(bool $isActive): void
    {
        $this->isActive = $isActive;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return BillingStatus
     */
    public function getBillingStatus(): ?BillingStatus
    {
        return $this->billingStatus;
    }

    /**
     * @param BillingStatus $billingStatus
     */
    public function setBillingStatus(BillingStatus $billingStatus): void
    {
        $this->billingStatus = $billingStatus;
    }

    /**
     * @return Address
     */
    public function getBillingAddress(): ?Address
    {
        return $this->billingAddress;
    }

    /**
     * @param Address $billingAddress
     */
    public function setBillingAddress(Address $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return Address
     */
    public function getDeliveryAddress(): ?Address
    {
        return $this->deliveryAddress;
    }

    /**
     * @param Address $deliveryAddress
     */
    public function setDeliveryAddress(Address $deliveryAddress): void
    {
        $this->deliveryAddress = $deliveryAddress;
    }

    /**
     * @return Host
     */
    public function getHost(): Host
    {
        return $this->host;
    }

    /**
     * @param Host $host
     */
    public function setHost(Host $host): void
    {
        $this->host = $host;
    }

    /**
     * @return \DateTime
     */
    public function getCancellationDate(): ?\DateTime
    {
        return $this->cancellationDate;
    }

    /**
     * @param \DateTime $cancellationDate
     */
    public function setCancellationDate(\DateTime $cancellationDate): void
    {
        $this->cancellationDate = $cancellationDate;
    }

    /**
     * @return PersistentCollection
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * Add orderLine
     *
     * @param OrderLine $orderLine
     *
     * @return Order
     */
    public function addOrderLine(OrderLine $orderLine): Order
    {
        $this->orderLines[] = $orderLine;

        return $this;
    }

    /**
     * Remove orderLine
     *
     * @param OrderLine $orderLine
     */
    public function removeOrderLine(OrderLine $orderLine): void
    {
        $this->orderLines->removeElement($orderLine);
    }
}
