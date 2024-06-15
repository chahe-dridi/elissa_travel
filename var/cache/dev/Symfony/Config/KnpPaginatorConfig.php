<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpPaginator'.\DIRECTORY_SEPARATOR.'DefaultOptionsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'KnpPaginator'.\DIRECTORY_SEPARATOR.'TemplateConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class KnpPaginatorConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $defaultOptions;
    private $template;
    private $pageRange;
    private $pageLimit;
    private $convertException;
    private $_usedProperties = [];

    public function defaultOptions(array $value = []): \Symfony\Config\KnpPaginator\DefaultOptionsConfig
    {
        if (null === $this->defaultOptions) {
            $this->_usedProperties['defaultOptions'] = true;
            $this->defaultOptions = new \Symfony\Config\KnpPaginator\DefaultOptionsConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "defaultOptions()" has already been initialized. You cannot pass values the second time you call defaultOptions().');
        }

        return $this->defaultOptions;
    }

    public function template(array $value = []): \Symfony\Config\KnpPaginator\TemplateConfig
    {
        if (null === $this->template) {
            $this->_usedProperties['template'] = true;
            $this->template = new \Symfony\Config\KnpPaginator\TemplateConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "template()" has already been initialized. You cannot pass values the second time you call template().');
        }

        return $this->template;
    }

    /**
     * @default 5
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pageRange($value): self
    {
        $this->_usedProperties['pageRange'] = true;
        $this->pageRange = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function pageLimit($value): self
    {
        $this->_usedProperties['pageLimit'] = true;
        $this->pageLimit = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function convertException($value): self
    {
        $this->_usedProperties['convertException'] = true;
        $this->convertException = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'knp_paginator';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('default_options', $value)) {
            $this->_usedProperties['defaultOptions'] = true;
            $this->defaultOptions = new \Symfony\Config\KnpPaginator\DefaultOptionsConfig($value['default_options']);
            unset($value['default_options']);
        }

        if (array_key_exists('template', $value)) {
            $this->_usedProperties['template'] = true;
            $this->template = new \Symfony\Config\KnpPaginator\TemplateConfig($value['template']);
            unset($value['template']);
        }

        if (array_key_exists('page_range', $value)) {
            $this->_usedProperties['pageRange'] = true;
            $this->pageRange = $value['page_range'];
            unset($value['page_range']);
        }

        if (array_key_exists('page_limit', $value)) {
            $this->_usedProperties['pageLimit'] = true;
            $this->pageLimit = $value['page_limit'];
            unset($value['page_limit']);
        }

        if (array_key_exists('convert_exception', $value)) {
            $this->_usedProperties['convertException'] = true;
            $this->convertException = $value['convert_exception'];
            unset($value['convert_exception']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultOptions'])) {
            $output['default_options'] = $this->defaultOptions->toArray();
        }
        if (isset($this->_usedProperties['template'])) {
            $output['template'] = $this->template->toArray();
        }
        if (isset($this->_usedProperties['pageRange'])) {
            $output['page_range'] = $this->pageRange;
        }
        if (isset($this->_usedProperties['pageLimit'])) {
            $output['page_limit'] = $this->pageLimit;
        }
        if (isset($this->_usedProperties['convertException'])) {
            $output['convert_exception'] = $this->convertException;
        }

        return $output;
    }

}
