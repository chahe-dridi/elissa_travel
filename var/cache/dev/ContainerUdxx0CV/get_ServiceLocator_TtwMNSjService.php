<?php

namespace ContainerUdxx0CV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TtwMNSjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TtwMNSj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TtwMNSj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'hotel' => ['privates', '.errored..service_locator.TtwMNSj.App\\Entity\\Hotel', NULL, 'Cannot autowire service ".service_locator.TtwMNSj": it references class "App\\Entity\\Hotel" but no such service exists.'],
        ], [
            'hotel' => 'App\\Entity\\Hotel',
        ]);
    }
}
