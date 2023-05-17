<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\TerminalManufacturer;

/**
 * Builder for model TerminalManufacturer
 *
 * @see TerminalManufacturer
 */
class TerminalManufacturerBuilder
{
    /**
     * @var TerminalManufacturer
     */
    private $instance;

    private function __construct(TerminalManufacturer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new terminal manufacturer Builder object.
     */
    public static function init(string $title, string $idtype, string $code): self
    {
        return new self(new TerminalManufacturer($title, $idtype, $code));
    }

    /**
     * Sets created ts field.
     */
    public function createdTs(?int $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Unsets created ts field.
     */
    public function unsetCreatedTs(): self
    {
        $this->instance->unsetCreatedTs();
        return $this;
    }

    /**
     * Sets modified ts field.
     */
    public function modifiedTs(?int $value): self
    {
        $this->instance->setModifiedTs($value);
        return $this;
    }

    /**
     * Unsets modified ts field.
     */
    public function unsetModifiedTs(): self
    {
        $this->instance->unsetModifiedTs();
        return $this;
    }

    /**
     * Sets created user id field.
     */
    public function createdUserId(?string $value): self
    {
        $this->instance->setCreatedUserId($value);
        return $this;
    }

    /**
     * Unsets created user id field.
     */
    public function unsetCreatedUserId(): self
    {
        $this->instance->unsetCreatedUserId();
        return $this;
    }

    /**
     * Sets modified user id field.
     */
    public function modifiedUserId(?string $value): self
    {
        $this->instance->setModifiedUserId($value);
        return $this;
    }

    /**
     * Unsets modified user id field.
     */
    public function unsetModifiedUserId(): self
    {
        $this->instance->unsetModifiedUserId();
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
     * Initializes a new terminal manufacturer object.
     */
    public function build(): TerminalManufacturer
    {
        return CoreHelper::clone($this->instance);
    }
}
