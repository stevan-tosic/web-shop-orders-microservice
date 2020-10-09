<?php declare(strict_types = 1);

namespace App\Core\Domain\Entity;

/**
 * Class Language
 */
class Language
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $short;

    /** @var string */
    private $shortIso;

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
    public function getShort(): string
    {
        return $this->short;
    }

    /**
     * @param string $short
     */
    public function setShort(string $short): void
    {
        $this->short = $short;
    }

    /**
     * @return string
     */
    public function getShortIso(): string
    {
        return $this->shortIso;
    }

    /**
     * @param string $shortIso
     */
    public function setShortIso(string $shortIso): void
    {
        $this->shortIso = $shortIso;
    }
}
