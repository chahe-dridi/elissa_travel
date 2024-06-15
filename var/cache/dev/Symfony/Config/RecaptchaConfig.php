<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RecaptchaConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $googleSiteKey;
    private $googleSecretKey;
    private $_usedProperties = [];

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function googleSiteKey($value): self
    {
        $this->_usedProperties['googleSiteKey'] = true;
        $this->googleSiteKey = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function googleSecretKey($value): self
    {
        $this->_usedProperties['googleSecretKey'] = true;
        $this->googleSecretKey = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'recaptcha';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('google_site_key', $value)) {
            $this->_usedProperties['googleSiteKey'] = true;
            $this->googleSiteKey = $value['google_site_key'];
            unset($value['google_site_key']);
        }

        if (array_key_exists('google_secret_key', $value)) {
            $this->_usedProperties['googleSecretKey'] = true;
            $this->googleSecretKey = $value['google_secret_key'];
            unset($value['google_secret_key']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['googleSiteKey'])) {
            $output['google_site_key'] = $this->googleSiteKey;
        }
        if (isset($this->_usedProperties['googleSecretKey'])) {
            $output['google_secret_key'] = $this->googleSecretKey;
        }

        return $output;
    }

}
