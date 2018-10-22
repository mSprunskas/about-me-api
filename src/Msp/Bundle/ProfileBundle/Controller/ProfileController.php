<?php
declare(strict_types=1);

namespace Msp\Bundle\ProfileBundle\Controller;

use Paysera\Bundle\RestBundle\Exception\ApiException;
use Msp\Bundle\ProfileBundle\Service\ProfileManager;
use Symfony\Component\HttpFoundation\Response;
use Msp\Bundle\ProfileBundle\Entity\Profile;

class ProfileController
{
    private $manager;

    public function __construct(ProfileManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param string $identifier
     *
     * @return Profile
     *
     * @throws ApiException
     */
    public function getProfile(string $identifier): Profile
    {
        $profile = $this->manager->getProfile($identifier);

        if ($profile === null) {
            throw new ApiException('profile_not_found', 'Profile not found', Response::HTTP_BAD_REQUEST);
        }

        return $profile;
    }
}
