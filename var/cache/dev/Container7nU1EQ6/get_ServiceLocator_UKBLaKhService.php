<?php

namespace Container7nU1EQ6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UKBLaKhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.UKBLaKh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UKBLaKh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'em' => ['privates', 'App\\Repository\\EventRepository', 'getEventRepositoryService', true],
        ], [
            'em' => 'App\\Repository\\EventRepository',
        ]);
    }
}
