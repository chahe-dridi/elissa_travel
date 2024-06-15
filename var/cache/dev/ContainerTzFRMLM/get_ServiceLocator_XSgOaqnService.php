<?php

namespace ContainerTzFRMLM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XSgOaqnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xSgOaqn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xSgOaqn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reservationVoyage' => ['privates', '.errored..service_locator.xSgOaqn.App\\Entity\\ReservationVoyage', NULL, 'Cannot autowire service ".service_locator.xSgOaqn": it references class "App\\Entity\\ReservationVoyage" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'reservationVoyage' => 'App\\Entity\\ReservationVoyage',
        ]);
    }
}
