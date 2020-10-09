<?php declare(strict_types = 1);

namespace App\Core\Domain\Entity\Order;

use App\Core\Domain\Entity\Article\Article;
use App\Core\Domain\Entity\CancellationStatus;
use App\Core\Domain\Entity\Host;
use App\Core\Domain\Entity\ShippingStatus;
use App\Core\Domain\Entity\Tax;
use Doctrine\Common\Collections\Collection;

/**
 * Class OrderLine
 */
class OrderLine
{
    /** @var int */
    private $id;

    /** @var Collection */
    private $order;

    /** @var float */
    private $price;

    /** @var \DateTime */
    private $createdAt;

    /** @var int */
    private $quantity;

    /** @var Tax */
    private $tax;

    /** @var ShippingStatus */
    private $shippingStatus;

    /** @var Article */
    private $article;

    /** @var Host */
    private $host;

    /** @var bool */
    private $isActive;

    /** @var \DateTime */
    private $cancellationDate;

    /** @var CancellationStatus */
    private $cancellationStatus;

    /** @var float */
    private $originalPrice;

    /** @var int */
    private $checkoutArticleParentLine;

    /** @var bool */
    private $isStandaloneCheckoutArticle;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Collection
     */
    public function getOrder(): Collection
    {
        return $this->order;
    }

    /**
     * @param Collection $order
     */
    public function setOrder(Collection $order): void
    {
        $this->order = $order;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
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
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return Tax
     */
    public function getTax(): Tax
    {
        return $this->tax;
    }

    /**
     * @param Tax $tax
     */
    public function setTax(Tax $tax): void
    {
        $this->tax = $tax;
    }

    /**
     * @return ShippingStatus
     */
    public function getShippingStatus(): ?ShippingStatus
    {
        return $this->shippingStatus;
    }

    /**
     * @param ShippingStatus $shippingStatus
     */
    public function setShippingStatus(ShippingStatus $shippingStatus): void
    {
        $this->shippingStatus = $shippingStatus;
    }

    /**
     * @return Article
     */
    public function getArticle(): ?Article
    {
        return $this->article;
    }

    /**
     * @param Article $article
     */
    public function setArticle(Article $article): void
    {
        $this->article = $article;
    }

    /**
     * @return Host
     */
    public function getHost(): ?Host
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
    public function getCancellationDate(): \DateTime
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
     * @return CancellationStatus
     */
    public function getCancellationStatus(): ?CancellationStatus
    {
        return $this->cancellationStatus;
    }

    /**
     * @param CancellationStatus $cancellationStatus
     */
    public function setCancellationStatus(CancellationStatus $cancellationStatus): void
    {
        $this->cancellationStatus = $cancellationStatus;
    }

    /**
     * @return float
     */
    public function getOriginalPrice(): float
    {
        return $this->originalPrice;
    }

    /**
     * @param float $originalPrice
     */
    public function setOriginalPrice(float $originalPrice): void
    {
        $this->originalPrice = $originalPrice;
    }

    /**
     * @return int
     */
    public function getCheckoutArticleParentLine(): int
    {
        return $this->checkoutArticleParentLine;
    }

    /**
     * @param int $checkoutArticleParentLine
     */
    public function setCheckoutArticleParentLine(int $checkoutArticleParentLine): void
    {
        $this->checkoutArticleParentLine = $checkoutArticleParentLine;
    }

    /**
     * @return bool
     */
    public function getIsStandaloneCheckoutArticle(): bool
    {
        return $this->isStandaloneCheckoutArticle;
    }

    /**
     * @param bool $isStandaloneCheckoutArticle
     */
    public function setIsStandaloneCheckoutArticle(bool $isStandaloneCheckoutArticle): void
    {
        $this->isStandaloneCheckoutArticle = $isStandaloneCheckoutArticle;
    }

}
