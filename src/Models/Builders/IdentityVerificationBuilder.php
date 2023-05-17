<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\IdentityVerification;

/**
 * Builder for model IdentityVerification
 *
 * @see IdentityVerification
 */
class IdentityVerificationBuilder
{
    /**
     * @var IdentityVerification
     */
    private $instance;

    private function __construct(IdentityVerification $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new identity verification Builder object.
     */
    public static function init(): self
    {
        return new self(new IdentityVerification());
    }

    /**
     * Sets dl state field.
     */
    public function dlState(?string $value): self
    {
        $this->instance->setDlState($value);
        return $this;
    }

    /**
     * Unsets dl state field.
     */
    public function unsetDlState(): self
    {
        $this->instance->unsetDlState();
        return $this;
    }

    /**
     * Sets dl number field.
     */
    public function dlNumber(?string $value): self
    {
        $this->instance->setDlNumber($value);
        return $this;
    }

    /**
     * Unsets dl number field.
     */
    public function unsetDlNumber(): self
    {
        $this->instance->unsetDlNumber();
        return $this;
    }

    /**
     * Sets dob year field.
     */
    public function dobYear(?string $value): self
    {
        $this->instance->setDobYear($value);
        return $this;
    }

    /**
     * Unsets dob year field.
     */
    public function unsetDobYear(): self
    {
        $this->instance->unsetDobYear();
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
     * Initializes a new identity verification object.
     */
    public function build(): IdentityVerification
    {
        return CoreHelper::clone($this->instance);
    }
}