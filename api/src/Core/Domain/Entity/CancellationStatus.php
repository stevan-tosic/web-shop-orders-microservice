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

    /** @var string */
    private $createdAt;

    /** @var string */
    private $createdBy;

    /** @var string */
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
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getCreatedBy(): string
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
     * @return string
     */
    public function getUpdatedBy(): string
    {
        return $this->updatedBy;
    }

    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy(string $updatedBy): void
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
}
