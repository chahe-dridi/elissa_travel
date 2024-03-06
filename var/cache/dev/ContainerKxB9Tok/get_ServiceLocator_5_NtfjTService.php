<?php

namespace ContainerKxB9Tok;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5_NtfjTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5.NtfjT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5.NtfjT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'reservationvolRepository' => ['privates', 'App\\Repository\\ReservationvolRepository', 'getReservationvolRepositoryService', true],
            'security' => ['services', 'App\\Controller\\SecurityController', 'getSecurityControllerService', true],
        ], [
            'paginator' => '?',
            'reservationvolRepository' => 'App\\Repository\\ReservationvolRepository',
            'security' => 'App\\Controller\\SecurityController',
        ]);
    }
}
