<?php

namespace Msp\Bundle\ProfileBundle\Normalizer;

use Paysera\Component\Serializer\Normalizer\NormalizerInterface;
use Msp\Bundle\ProfileBundle\Entity\Part;

class PartNormalizer implements NormalizerInterface
{
    /**
     * @param Part $entity
     *
     * @return array
     */
    public function mapFromEntity($entity)
    {
        return [
            'identifier' => $entity->getIdentifier(),
            'parent_identifier' => $entity->getParentIdentifier(),
            'content' => $entity->getContent(),
            'layout' => $entity->getLayout(),
            'properties' => $entity->getProperties(),
            'order' => $entity->getOrder(),
        ];
    }
}
