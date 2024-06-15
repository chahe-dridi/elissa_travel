<?php

namespace VictorPrdh\RecaptchaBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * RecaptchaExtension
 */
class RecaptchaExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container) :void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $loader->load('services.yaml');

        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        foreach ($config as $key => $value) {
            $container->setParameter('victor_prdh_recaptcha.' . $key, $value);
        }

        $resources = $container->getParameter('twig.form.resources');

        $container->setParameter(
            'twig.form.resources',
            array_merge(array('@Recaptcha/form/recaptcha.html.twig'), $resources)
        );
    }
}
