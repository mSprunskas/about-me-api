<?php

namespace Msp\Bundle\ProfileBundle\Normalizer;

use Paysera\Component\Serializer\Normalizer\NormalizerInterface;
use Msp\Bundle\ProfileBundle\Entity\Contacts;

class ContactsNormalizer implements NormalizerInterface
{
    private $locationNormalizer;

    public function __construct(NormalizerInterface $locationNormalizer)
    {
        $this->locationNormalizer = $locationNormalizer;
    }

    /**
     * @param Contacts $entity
     *
     * @return array
     */
    public function mapFromEntity($entity)
    {
        $result = [
            'email' => $entity->getEmail(),
            'phone' => $entity->getPhone(),
        ];

        if ($entity->getLocation() !== null) {
            $result['location'] = $this->locationNormalizer->mapFromEntity($entity->getLocation());
        }

        return $result;
    }
}
