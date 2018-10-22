<?php

namespace Msp\Bundle\ProfileBundle;

use Paysera\Component\DependencyInjection\AddTaggedCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MspProfileBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new AddTaggedCompilerPass(
            'msp_profile.service.profile_provider_registry',
            'msp_profile.profile_provider',
            'addProvider'
        ));

        $container->addCompilerPass(new AddTaggedCompilerPass(
            'msp_profile.service.part_collection_registry',
            'msp_profile.part_collection',
            'addPartCollection',
            ['identifier']
        ));

        $container->addCompilerPass(new AddTaggedCompilerPass(
            'msp_profile.service.profile_registry',
            'msp_profile.profile',
            'addProfile'
        ));
    }
}
