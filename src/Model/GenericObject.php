<?php

namespace Phpackage\Autodns\Model;

class GenericObject
{
    /**
     * @var string|null The type of the object
     */
    private $type;

    /**
     * @var string|null The value of the object
     */
    private $value;

    public function __construct(?string $type = null, ?string $value = null)
    {
        $this->type = $type;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
