<?php
declare(strict_types=1);

namespace Msp\Bundle\ProfileBundle\Entity;

class PartCollection
{
    private $parts;

    public function __construct()
    {
        $this->parts = [];
    }

    /**
     * @return Part[]
     */
    public function getParts(): array
    {
        return $this->parts;
    }

    public function setParts(array $parts): self
    {
        $this->parts = $parts;

        return $this;
    }

    public function addPart(Part $part)
    {
        $this->parts[] = $part;
    }
}
