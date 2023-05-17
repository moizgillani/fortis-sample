<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Joi3;

/**
 * Builder for model Joi3
 *
 * @see Joi3
 */
class Joi3Builder
{
    /**
     * @var Joi3
     */
    private $instance;

    private function __construct(Joi3 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new joi 3 Builder object.
     */
    public static function init(): self
    {
        return new self(new Joi3());
    }

    /**
     * Sets conditions field.
     */
    public function conditions($value): self
    {
        $this->instance->setConditions($value);
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
     * Initializes a new joi 3 object.
     */
    public function build(): Joi3
    {
        return CoreHelper::clone($this->instance);
    }
}
