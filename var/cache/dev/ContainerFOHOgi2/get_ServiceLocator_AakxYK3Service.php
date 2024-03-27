<?php

namespace ContainerFOHOgi2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AakxYK3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AakxYK3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AakxYK3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reservationvol' => ['privates', '.errored..service_locator.AakxYK3.App\\Entity\\Reservationvol', NULL, 'Cannot autowire service ".service_locator.AakxYK3": it references class "App\\Entity\\Reservationvol" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'reservationvol' => 'App\\Entity\\Reservationvol',
        ]);
    }
}
