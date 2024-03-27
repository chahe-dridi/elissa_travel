<?php

namespace Container7nU1EQ6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QtapsPbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qtapsPb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qtapsPb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'airportRepository' => ['privates', 'App\\Repository\\AirportRepository', 'getAirportRepositoryService', true],
        ], [
            'airportRepository' => 'App\\Repository\\AirportRepository',
        ]);
    }
}
