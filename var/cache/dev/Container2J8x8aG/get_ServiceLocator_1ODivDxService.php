<?php

namespace Container2J8x8aG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1ODivDxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1ODivDx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1ODivDx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'volclass' => ['privates', '.errored..service_locator.1ODivDx.App\\Entity\\Volclass', NULL, 'Cannot autowire service ".service_locator.1ODivDx": it references class "App\\Entity\\Volclass" but no such service exists.'],
        ], [
            'volclass' => 'App\\Entity\\Volclass',
        ]);
    }
}
