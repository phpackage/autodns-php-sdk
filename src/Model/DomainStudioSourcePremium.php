<?php

namespace Phpackage\Autodns\Model;

class DomainStudioSourcePremium extends AbstractDomainStudioSource
{
    /**
     * @var string[] Promo tlds
     */
    private $promoTlds;

    /**
     * @var string[] Top tlds
     */
    private $topTlds;

    /**
     * @var int The maximum amount of fetched premium and market domains
     */
    private $max;

    /**
     * @return string[]
     */
    public function getPromoTlds(): ?array
    {
        return $this->promoTlds;
    }

    /**
     * @param string[] $promoTlds
     */
    public function setPromoTlds(array $promoTlds): void
    {
        $this->promoTlds = $promoTlds;
    }

    /**
     * @return string[]
     */
    public function getTopTlds(): ?array
    {
        return $this->topTlds;
    }

    /**
     * @param string[] $topTlds
     */
    public function setTopTlds(array $topTlds): void
    {
        $this->topTlds = $topTlds;
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
}
