<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data5;
use FortisAPILib\Models\ResponseTransactionIntention;

/**
 * Builder for model ResponseTransactionIntention
 *
 * @see ResponseTransactionIntention
 */
class ResponseTransactionIntentionBuilder
{
    /**
     * @var ResponseTransactionIntention
     */
    private $instance;

    private function __construct(ResponseTransactionIntention $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new response transaction intention Builder object.
     */
    public static function init(): self
    {
        return new self(new ResponseTransactionIntention());
    }

    /**
     * Sets data field.
     */
    public function data(?Data5 $value): self
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
     * Initializes a new response transaction intention object.
     */
    public function build(): ResponseTransactionIntention
    {
        return CoreHelper::clone($this->instance);
    }
}
