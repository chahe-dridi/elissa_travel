<?php

namespace ContainerTTjGvTx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M0T5T_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.m_0T5T.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.m_0T5T.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mailer' => ['privates', 'App\\Service\\SendMailService', 'getSendMailServiceService', true],
            'manager' => ['services', 'doctrine', 'getDoctrineService', false],
            'tokenGenerator' => ['privates', 'security.csrf.token_generator', 'getSecurity_Csrf_TokenGeneratorService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'mailer' => 'App\\Service\\SendMailService',
            'manager' => '?',
            'tokenGenerator' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
