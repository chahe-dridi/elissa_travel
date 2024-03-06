<?php

/**
 * Configuration class.
 */

namespace VictorPrdh\RecaptchaBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder() :TreeBuilder
    {
        $treeBuilder = new TreeBuilder('recaptcha');

        $treeBuilder->getRootNode()
            ->children()
            ->scalarNode('google_site_key')->end()
            ->scalarNode('google_secret_key')->end()
            ->end();

        return $treeBuilder;
    }
}
