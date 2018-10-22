<?php
declare(strict_types=1);

namespace Msp\Bundle\ProfileBundle\Service;

use Msp\Bundle\ProfileBundle\Entity\PartCollection;
use Msp\Bundle\ProfileBundle\Entity\Profile;
use InvalidArgumentException;

class ConfigProfileProvider implements ProfileProviderInterface
{
    private $partCollectionRegistry;
    private $profileRegistry;

    public function __construct(PartCollectionRegistry $partCollectionRegistry, ProfileRegistry $profileRegistry)
    {
        $this->partCollectionRegistry = $partCollectionRegistry;
        $this->profileRegistry = $profileRegistry;
    }

    public function getProfile(string $identifier)
    {
        try {
            $profile = $this->profileRegistry->getProfile($identifier);

            $collections = $this->partCollectionRegistry->getPartCollections($identifier);

            foreach ($collections as $collection) {
                $this->addPartsToProfile($collection, $profile);
            }

            return $profile;
        } catch (InvalidArgumentException $exception) {
            return null;
        }
    }

    private function addPartsToProfile(PartCollection $collection, Profile $profile)
    {
        foreach ($collection->getParts() as $part) {
            $profile->addPart($part);
        }
    }
}
