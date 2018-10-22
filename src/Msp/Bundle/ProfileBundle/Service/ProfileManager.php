<?php

namespace Msp\Bundle\ProfileBundle\Service;

use Msp\Bundle\ProfileBundle\Entity\Profile;

class ProfileManager
{
    private $registry;

    public function __construct(ProfileProviderRegistry $registry)
    {
        $this->registry = $registry;
    }

    /**
     * @param string $identifier
     * @return Profile|null
     */
    public function getProfile(string $identifier)
    {
        foreach ($this->registry->getProviders() as $provider) {
            $profile = $provider->getProfile($identifier);

            if ($profile !== null) {
                return $profile;
            }
        }

        return null;
    }
}
