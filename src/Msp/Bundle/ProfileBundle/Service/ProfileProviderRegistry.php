<?php
declare(strict_types=1);

namespace Msp\Bundle\ProfileBundle\Service;

class ProfileProviderRegistry
{
    private $providers;

    public function __construct()
    {
        $this->providers = [];
    }

    public function addProvider(ProfileProviderInterface $provider)
    {
        $this->providers[] = $provider;
    }

    /**
     * @return ProfileProviderInterface[]
     */
    public function getProviders(): array
    {
        return $this->providers;
    }
}
