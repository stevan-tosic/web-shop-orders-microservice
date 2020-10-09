<?php declare(strict_types = 1);

namespace App\Core\Domain\Entity;

/**
 * Class Country
 */
class Country
{
    /** @var int */
    private $id;

    /** @var string */
    private $name;

    /** @var string */
    private $acronym;

    /** @var bool */
    private $inCheckout;

    /** @var string */
    private $alpha3Code;

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
    public function getAcronym(): string
    {
        return $this->acronym;
    }

    /**
     * @param string $acronym
     */
    public function setAcronym(string $acronym): void
    {
        $this->acronym = $acronym;
    }

    /**
     * @return bool
     */
    public function isInCheckout(): bool
    {
        return $this->inCheckout;
    }

    /**
     * @param bool $inCheckout
     */
    public function setInCheckout(bool $inCheckout): void
    {
        $this->inCheckout = $inCheckout;
    }

    /**
     * @return string
     */
    public function getAlpha3Code(): string
    {
        return $this->alpha3Code;
    }

    /**
     * @param string $alpha3Code
     */
    public function setAlpha3Code(string $alpha3Code): void
    {
        $this->alpha3Code = $alpha3Code;
    }
}
