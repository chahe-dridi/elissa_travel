<?php

namespace ContainerUdxx0CV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UGIhsJAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UGIhsJA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UGIhsJA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'reservationHotel' => ['privates', '.errored..service_locator.UGIhsJA.App\\Entity\\ReservationHotel', NULL, 'Cannot autowire service ".service_locator.UGIhsJA": it references class "App\\Entity\\ReservationHotel" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'reservationHotel' => 'App\\Entity\\ReservationHotel',
        ]);
    }
}