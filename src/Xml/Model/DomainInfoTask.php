<?php

namespace Phpackage\Autodns\Xml\Model;

class DomainInfoTask extends Task
{
    const CODE = '0105';

    /**
     * @var Domain
     */
    private $domain;

    public function __construct()
    {
        parent::__construct(self::CODE);
    }

    /**
     * @return Domain
     */
    public function getDomain(): ?Domain
    {
        return $this->domain;
    }

    /**
     * @param Domain $domain
     */
    public function setDomain(Domain $domain): void
    {
        $this->domain = $domain;
    }
}
