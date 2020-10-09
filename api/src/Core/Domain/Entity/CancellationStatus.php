<?php declare(strict_types = 1);

namespace App\Core\Domain\Entity;

/**
 * Class CancellationStatus
 */
class CancellationStatus
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $description;

    /** @var \DateTime */
    private $createdAt;

    /** @var int */
    private $createdBy;

    /** @var \DateTime */
    private $updatedAt;

    /** @var int */
    private $updatedBy;

    /** @var bool */
    private $isRequireComment;

    /** @var bool */
    private $isCancellation;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
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
    public function getCreatedBy(): int
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     */
    public function setCreatedBy(string $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return int
     */
    public function getUpdatedBy(): int
    {
        return $this->updatedBy;
    }

    /**
     * @param int $updatedBy
     */
    public function setUpdatedBy(int $updatedBy): void
    {
        $this->updatedBy = $updatedBy;
    }

    /**
     * @return bool
     */
    public function isRequireComment(): bool
    {
        return $this->isRequireComment;
    }

    /**
     * @param bool $isRequireComment
     */
    public function setIsRequireComment(bool $isRequireComment): void
    {
        $this->isRequireComment = $isRequireComment;
    }

    /**
     * @return bool
     */
    public function isCancellation(): bool
    {
        return $this->isCancellation;
    }

    /**
     * @param bool $isCancellation
     */
    public function setIsCancellation(bool $isCancellation): void
    {
        $this->isCancellation = $isCancellation;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}
