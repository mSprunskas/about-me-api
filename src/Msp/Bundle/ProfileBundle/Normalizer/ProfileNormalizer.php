<?php

namespace Msp\Bundle\ProfileBundle\Normalizer;

use Paysera\Component\Serializer\Normalizer\NormalizerInterface;
use Msp\Bundle\ProfileBundle\Entity\Profile;

class ProfileNormalizer implements NormalizerInterface
{
    private $contactsNormalizer;
    private $partsNormalizer;

    public function __construct(
        NormalizerInterface $contactsNormalizer,
        NormalizerInterface $partsNormalizer
    ) {
        $this->contactsNormalizer = $contactsNormalizer;
        $this->partsNormalizer = $partsNormalizer;
    }

    /**
     * @param Profile $entity
     *
     * @return array
     */
    public function mapFromEntity($entity)
    {
        return [
            'identifier' => $entity->getIdentifier(),
            'name' => $entity->getName(),
            'occupation' => $entity->getOccupation(),
            'avatar' => $entity->getAvatar(),
            'contacts' => $this->contactsNormalizer->mapFromEntity($entity->getContacts()),
            'parts' => $this->partsNormalizer->mapFromEntity($entity->getParts()),
        ];
    }

}
