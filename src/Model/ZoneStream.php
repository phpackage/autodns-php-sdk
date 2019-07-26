<?php

namespace Phpackage\Autodns\Model;

class ZoneStream
{
    /**
     * @var ResourceRecord[] the records to add
     */
    private $adds;

    /**
     * @var ResourceRecord[] the records to remove
     */
    private $rems;

    /**
     * @return ResourceRecord[]
     */
    public function getAdds(): array
    {
        return $this->adds;
    }

    /**
     * @param ResourceRecord[] $adds
     */
    public function setAdds(array $adds): void
    {
        $this->adds = $adds;
    }

    /**
     * @return ResourceRecord[]
     */
    public function getRems(): array
    {
        return $this->rems;
    }

    /**
     * @param ResourceRecord[] $rems
     */
    public function setRems(array $rems): void
    {
        $this->rems = $rems;
    }
}
