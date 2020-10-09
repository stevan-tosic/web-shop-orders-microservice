<?php declare(strict_types = 1);

namespace App\Core\Domain\Entity\Article;

use App\Core\Domain\Entity\Host;

/**
 * Class ArticleVerticals
 */
class ArticleVerticals
{
    /** @var int */
    private $id;

    /** @var Article */
    private $article;

    /** @var Host */
    private $host;

    /** @var string */
    private $title;

    /** @var string */
    private $subTitle;

    /** @var float */
    private $price;

    /** @var float */
    private $bestPrice;

    /** @var float */
    private $specialPrice;

    /** @var \DateTime */
    private $firstActivationDate;

    /** @var \DateTime */
    private $lastActivationDate;

    /** @var \DateTime */
    private $creationDate;

    /** @var \DateTime */
    private $lastChangeDate;

    /** @var int */
    private $erpNumber;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Article
     */
    public function getArticle(): Article
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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSubTitle(): string
    {
        return $this->subTitle;
    }

    /**
     * @param string $subTitle
     */
    public function setSubTitle(string $subTitle): void
    {
        $this->subTitle = $subTitle;
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
     * @return float
     */
    public function getBestPrice(): float
    {
        return $this->bestPrice;
    }

    /**
     * @param float $bestPrice
     */
    public function setBestPrice(float $bestPrice): void
    {
        $this->bestPrice = $bestPrice;
    }

    /**
     * @return float
     */
    public function getSpecialPrice(): float
    {
        return $this->specialPrice;
    }

    /**
     * @param float $specialPrice
     */
    public function setSpecialPrice(float $specialPrice): void
    {
        $this->specialPrice = $specialPrice;
    }

    /**
     * @return \DateTime
     */
    public function getFirstActivationDate(): \DateTime
    {
        return $this->firstActivationDate;
    }

    /**
     * @param \DateTime $firstActivationDate
     */
    public function setFirstActivationDate(\DateTime $firstActivationDate): void
    {
        $this->firstActivationDate = $firstActivationDate;
    }

    /**
     * @return \DateTime
     */
    public function getLastActivationDate(): \DateTime
    {
        return $this->lastActivationDate;
    }

    /**
     * @param \DateTime $lastActivationDate
     */
    public function setLastActivationDate(\DateTime $lastActivationDate): void
    {
        $this->lastActivationDate = $lastActivationDate;
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
     * @return int
     */
    public function getErpNumber(): int
    {
        return $this->erpNumber;
    }

    /**
     * @param int $erpNumber
     */
    public function setErpNumber(int $erpNumber): void
    {
        $this->erpNumber = $erpNumber;
    }


}
