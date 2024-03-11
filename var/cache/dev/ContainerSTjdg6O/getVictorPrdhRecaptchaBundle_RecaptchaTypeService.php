<?php

namespace ContainerSTjdg6O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVictorPrdhRecaptchaBundle_RecaptchaTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'victor_prdh_recaptcha_bundle.recaptcha_type' shared autowired service.
     *
     * @return \VictorPrdh\RecaptchaBundle\Form\ReCaptchaType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'victor-prdh'.\DIRECTORY_SEPARATOR.'recaptcha-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'ReCaptchaType.php';

        return $container->services['victor_prdh_recaptcha_bundle.recaptcha_type'] = new \VictorPrdh\RecaptchaBundle\Form\ReCaptchaType(($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container))));
    }
}
