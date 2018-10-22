<?php

namespace Msp\Bundle\ProfileBundle\Service;

use Msp\Bundle\ProfileBundle\Entity\PartCollection;

class PartCollectionRegistry
{
    private $collections;

    public function __construct()
    {
        $this->collections = [];
    }

    public function addPartCollection(PartCollection $collection, string $identifier)
    {
        $this->collections[$identifier][] = $collection;
    }

    /**
     * @param string $identifier
     *
     * @return PartCollection[]
     */
    public function getPartCollections(string $identifier): array
    {
        if (isset($this->collections[$identifier])) {
            return $this->collections[$identifier];
        }

        return [];
    }
}
