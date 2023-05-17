<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data3;
use FortisAPILib\Models\ResponseDeviceTerm;

/**
 * Builder for model ResponseDeviceTerm
 *
 * @see ResponseDeviceTerm
 */
class ResponseDeviceTermBuilder
{
    /**
     * @var ResponseDeviceTerm
     */
    private $instance;

    private function __construct(ResponseDeviceTerm $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response device term Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseDeviceTerm());
    }

    /**
     * Sets data field.
     */
    public function data(?Data3 $value): self
    {
        $this->instance->setData($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new response device term object.
     */
    public function build(): ResponseDeviceTerm
    {
        return CoreHelper::clone($this->instance);
    }
}