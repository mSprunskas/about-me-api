<?php
declare(strict_types=1);

namespace Msp\Bundle\ProfileBundle\Service;

use Msp\Bundle\ProfileBundle\Repository\ProfileRepository;

class DatabaseProfileProvider implements ProfileProviderInterface
{
    private $repository;

    public function __construct(ProfileRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getProfile(string $identifier)
    {
        return $this->repository->findOneByIdentifier($identifier);
    }
}
