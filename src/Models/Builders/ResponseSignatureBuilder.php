<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data13;
use FortisAPILib\Models\ResponseSignature;

/**
 * Builder for model ResponseSignature
 *
 * @see ResponseSignature
 */
class ResponseSignatureBuilder
{
    /**
     * @var ResponseSignature
     */
    private $instance;

    private function __construct(ResponseSignature $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response signature Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseSignature());
    }

    /**
     * Sets data field.
     */
    public function data(?Data13 $value): self
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
     * Initializes a new response signature object.
     */
    public function build(): ResponseSignature
    {
        return CoreHelper::clone($this->instance);
    }
}
