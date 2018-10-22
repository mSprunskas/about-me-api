<?php

namespace Msp\Bundle\ProfileBundle\Normalizer;

use Paysera\Component\Serializer\Normalizer\NormalizerInterface;
use Msp\Bundle\ProfileBundle\Entity\Location;

class LocationNormalizer implements NormalizerInterface
{
    /**
     * @param Location $entity
     *
     * @return array
     */
    public function mapFromEntity($entity)
    {
        return [
            'title' => $entity->getTitle(),
            'url' => $entity->getUrl(),
        ];
    }

}
