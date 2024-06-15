<?php

namespace ContainerUdxx0CV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NfO0sN2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nfO0sN2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nfO0sN2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'voyage' => ['privates', '.errored..service_locator.nfO0sN2.App\\Entity\\Voyage', NULL, 'Cannot autowire service ".service_locator.nfO0sN2": it references class "App\\Entity\\Voyage" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'voyage' => 'App\\Entity\\Voyage',
        ]);
    }
}