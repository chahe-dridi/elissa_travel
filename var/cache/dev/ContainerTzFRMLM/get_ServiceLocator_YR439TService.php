<?php

namespace ContainerTzFRMLM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YR439TService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._YR439T' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._YR439T'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservationVolRepository' => ['privates', 'App\\Repository\\ReservationvolRepository', 'getReservationvolRepositoryService', true],
        ], [
            'reservationVolRepository' => 'App\\Repository\\ReservationvolRepository',
        ]);
    }
}
