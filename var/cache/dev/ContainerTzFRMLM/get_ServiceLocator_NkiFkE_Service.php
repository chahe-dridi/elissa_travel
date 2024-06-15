<?php

namespace ContainerTzFRMLM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NkiFkE_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nkiFkE.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nkiFkE.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hotelRepository' => ['privates', 'App\\Repository\\HotelRepository', 'getHotelRepositoryService', true],
            'paginatorInterface' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'hotelRepository' => 'App\\Repository\\HotelRepository',
            'paginatorInterface' => '?',
        ]);
    }
}
