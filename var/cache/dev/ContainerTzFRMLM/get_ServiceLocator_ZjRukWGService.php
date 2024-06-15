<?php

namespace ContainerTzFRMLM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZjRukWGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZjRukWG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZjRukWG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chambre' => ['privates', '.errored..service_locator.ZjRukWG.App\\Entity\\Chambre', NULL, 'Cannot autowire service ".service_locator.ZjRukWG": it references class "App\\Entity\\Chambre" but no such service exists.'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'chambre' => 'App\\Entity\\Chambre',
            'entityManager' => '?',
        ]);
    }
}
