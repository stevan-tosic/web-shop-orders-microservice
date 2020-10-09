<?php declare(strict_types = 1);

namespace App\Core\Domain\Entity\Article;

use Doctrine\Common\Collections\Collection;

/**
 * Class Article
 */
class Article
{
    /** @var int */
    private $id;

    /** @var Collection */
    private $articleType;

    /** @var Collection */
    private $tax;

    /** @var \DateTime */
    private $creationDate;

    /** @var \DateTime */
    private $lastChangeDate;

    /** @var \DateTime */
    private $activationDate;

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
    public function getArticleType(): Collection
    {
        return $this->articleType;
    }

    /**
     * @param Collection $articleType
     */
    public function setArticleType(Collection $articleType): void
    {
        $this->articleType = $articleType;
    }

    /**
     * @return Collection
     */
    public function getTax(): Collection
    {
        return $this->tax;
    }

    /**
     * @param Collection $tax
     */
    public function setTax(Collection $tax): void
    {
        $this->tax = $tax;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate(): \DateTime
    {
        return $this->creationDate;
    }

    /**
     * @param \DateTime $creationDate
     */
    public function setCreationDate(\DateTime $creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return \DateTime
     */
    public function getLastChangeDate(): \DateTime
    {
        return $this->lastChangeDate;
    }

    /**
     * @param \DateTime $lastChangeDate
     */
    public function setLastChangeDate(\DateTime $lastChangeDate): void
    {
        $this->lastChangeDate = $lastChangeDate;
    }

    /**
     * @return \DateTime
     */
    public function getActivationDate(): \DateTime
    {
        return $this->activationDate;
    }

    /**
     * @param \DateTime $activationDate
     */
    public function setActivationDate(\DateTime $activationDate): void
    {
        $this->activationDate = $activationDate;
    }
}
