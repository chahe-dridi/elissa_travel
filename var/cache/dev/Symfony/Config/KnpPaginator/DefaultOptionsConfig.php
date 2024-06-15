<?php

namespace Symfony\Config\KnpPaginator;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefaultOptionsConfig 
{
    private $sortFieldName;
    private $sortDirectionName;
    private $filterFieldName;
    private $filterValueName;
    private $pageName;
    private $distinct;
    private $pageOutOfRange;
    private $defaultLimit;
    private $_usedProperties = [];

    /**
     * @default 'sort'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sortFieldName($value): self
    {
        $this->_usedProperties['sortFieldName'] = true;
        $this->sortFieldName = $value;

        return $this;
    }

    /**
     * @default 'direction'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function sortDirectionName($value): self
    {
        $this->_usedProperties['sortDirectionName'] = true;
        $this->sortDirectionName = $value;

        return $this;
    }

    /**
     * @default 'filterField'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filterFieldName($value): self
    {
        $this->_usedProperties['filterFieldName'] = true;
        $this->filterFieldName = $value;

        return $this;
    }

    /**
     * @default 'filterValue'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filterValueName($value): self
    {
        $this->_usedProperties['filterValueName'] = true;
        $this->filterValueName = $value;

        return $this;
    }

    /**
     * @default 'page'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pageName($value): self
    {
        $this->_usedProperties['pageName'] = true;
        $this->pageName = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function distinct($value): self
    {
        $this->_usedProperties['distinct'] = true;
        $this->distinct = $value;

        return $this;
    }

    /**
     * @default 'ignore'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pageOutOfRange($value): self
    {
        $this->_usedProperties['pageOutOfRange'] = true;
        $this->pageOutOfRange = $value;

        return $this;
    }

    /**
     * @default 10
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultLimit($value): self
    {
        $this->_usedProperties['defaultLimit'] = true;
        $this->defaultLimit = $value;

        return $this;
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('sort_field_name', $value)) {
            $this->_usedProperties['sortFieldName'] = true;
            $this->sortFieldName = $value['sort_field_name'];
            unset($value['sort_field_name']);
        }

        if (array_key_exists('sort_direction_name', $value)) {
            $this->_usedProperties['sortDirectionName'] = true;
            $this->sortDirectionName = $value['sort_direction_name'];
            unset($value['sort_direction_name']);
        }

        if (array_key_exists('filter_field_name', $value)) {
            $this->_usedProperties['filterFieldName'] = true;
            $this->filterFieldName = $value['filter_field_name'];
            unset($value['filter_field_name']);
        }

        if (array_key_exists('filter_value_name', $value)) {
            $this->_usedProperties['filterValueName'] = true;
            $this->filterValueName = $value['filter_value_name'];
            unset($value['filter_value_name']);
        }

        if (array_key_exists('page_name', $value)) {
            $this->_usedProperties['pageName'] = true;
            $this->pageName = $value['page_name'];
            unset($value['page_name']);
        }

        if (array_key_exists('distinct', $value)) {
            $this->_usedProperties['distinct'] = true;
            $this->distinct = $value['distinct'];
            unset($value['distinct']);
        }

        if (array_key_exists('page_out_of_range', $value)) {
            $this->_usedProperties['pageOutOfRange'] = true;
            $this->pageOutOfRange = $value['page_out_of_range'];
            unset($value['page_out_of_range']);
        }

        if (array_key_exists('default_limit', $value)) {
            $this->_usedProperties['defaultLimit'] = true;
            $this->defaultLimit = $value['default_limit'];
            unset($value['default_limit']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['sortFieldName'])) {
            $output['sort_field_name'] = $this->sortFieldName;
        }
        if (isset($this->_usedProperties['sortDirectionName'])) {
            $output['sort_direction_name'] = $this->sortDirectionName;
        }
        if (isset($this->_usedProperties['filterFieldName'])) {
            $output['filter_field_name'] = $this->filterFieldName;
        }
        if (isset($this->_usedProperties['filterValueName'])) {
            $output['filter_value_name'] = $this->filterValueName;
        }
        if (isset($this->_usedProperties['pageName'])) {
            $output['page_name'] = $this->pageName;
        }
        if (isset($this->_usedProperties['distinct'])) {
            $output['distinct'] = $this->distinct;
        }
        if (isset($this->_usedProperties['pageOutOfRange'])) {
            $output['page_out_of_range'] = $this->pageOutOfRange;
        }
        if (isset($this->_usedProperties['defaultLimit'])) {
            $output['default_limit'] = $this->defaultLimit;
        }

        return $output;
    }

}
