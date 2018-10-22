<?php
declare(strict_types=1);

namespace Msp\Bundle\ProfileBundle\Service;

use Msp\Bundle\ProfileBundle\Entity\Profile;

interface ProfileProviderInterface
{
    /**
     * @param string $identifier
     * @return Profile|null
     */
    public function getProfile(string $identifier);
}
