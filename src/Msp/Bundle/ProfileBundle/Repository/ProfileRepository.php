<?php

namespace Msp\Bundle\ProfileBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProfileRepository extends EntityRepository
{
    public function findOneByIdentifier(string $identifier)
    {
        return $this->findOneBy(['identifier' => $identifier]);
    }
}
