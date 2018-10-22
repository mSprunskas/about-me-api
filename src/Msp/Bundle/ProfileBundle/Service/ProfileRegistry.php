<?php

namespace Msp\Bundle\ProfileBundle\Service;

use Msp\Bundle\ProfileBundle\Entity\Profile;
use InvalidArgumentException;

class ProfileRegistry
{
    private $profiles;

    public function __construct()
    {
        $this->profiles = [];
    }

    public function addProfile(Profile $profile)
    {
        $this->profiles[$profile->getIdentifier()] = $profile;
    }

    /**
     * @param string $identifier
     *
     * @return Profile
     *
     * @throws InvalidArgumentException
     */
    public function getProfile(string $identifier): Profile
    {
        if (isset($this->profiles[$identifier])) {
            return $this->profiles[$identifier];
        }

        throw new InvalidArgumentException(sprintf('Profile with identifier "%s" not found', $identifier));
    }
}
