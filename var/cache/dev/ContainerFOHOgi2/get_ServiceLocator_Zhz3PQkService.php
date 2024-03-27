<?php

namespace ContainerFOHOgi2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Zhz3PQkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zhz3PQk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zhz3PQk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'security' => ['services', 'App\\Controller\\SecurityController', 'getSecurityControllerService', true],
        ], [
            'entityManager' => '?',
            'security' => 'App\\Controller\\SecurityController',
        ]);
    }
}
