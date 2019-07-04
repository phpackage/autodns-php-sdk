<?php

namespace Phpackage\Autodns\Model;

class DomainStudioSourceSuggestion extends AbstractDomainStudioSource
{
    /**
     * @var string Suggestion language
     */
    private $language;

    /**
     * @var int Maximum fetched suggested domains
     */
    private $max;

    /**
     * @var int Maximum sld length for suggested domains
     */
    private $maxSldLength;

    /**
     * @var bool Suggested domains with dash
     */
    private $useDash;

    /**
     * @var bool Suggested domains with numbers
     */
    private $useNumber;

    /**
     * @var bool Suggested domains with idn
     */
    private $useIdn;

    /**
     * @var string[] Selected tlds
     */
    private $tlds;

    /**
     * @return string
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * @return int
     */
    public function getMax(): ?int
    {
        return $this->max;
    }

    /**
     * @param int $max
     */
    public function setMax(int $max): void
    {
        $this->max = $max;
    }

    /**
     * @return int
     */
    public function getMaxSldLength(): ?int
    {
        return $this->maxSldLength;
    }

    /**
     * @param int $maxSldLength
     */
    public function setMaxSldLength(int $maxSldLength): void
    {
        $this->maxSldLength = $maxSldLength;
    }

    /**
     * @return bool
     */
    public function isUseDash(): ?bool
    {
        return $this->useDash;
    }

    /**
     * @param bool $useDash
     */
    public function setUseDash(bool $useDash): void
    {
        $this->useDash = $useDash;
    }

    /**
     * @return bool
     */
    public function isUseNumber(): ?bool
    {
        return $this->useNumber;
    }

    /**
     * @param bool $useNumber
     */
    public function setUseNumber(bool $useNumber): void
    {
        $this->useNumber = $useNumber;
    }

    /**
     * @return bool
     */
    public function isUseIdn(): ?bool
    {
        return $this->useIdn;
    }

    /**
     * @param bool $useIdn
     */
    public function setUseIdn(bool $useIdn): void
    {
        $this->useIdn = $useIdn;
    }

    /**
     * @return string[]
     */
    public function getTlds(): ?array
    {
        return $this->tlds;
    }

    /**
     * @param string[] $tlds
     */
    public function setTlds(array $tlds): void
    {
        $this->tlds = $tlds;
    }
}
