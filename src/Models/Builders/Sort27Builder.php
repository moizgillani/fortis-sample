<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Sort27;

/**
 * Builder for model Sort27
 *
 * @see Sort27
 */
class Sort27Builder
{
    /**
     * @var Sort27
     */
    private $instance;

    private function __construct(Sort27 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new sort 27 Builder object.
     */
    public static function init(): self
    {
        return new self(new Sort27());
    }

    /**
     * Sets account holder name field.
     */
    public function accountHolderName(?array $value): self
    {
        $this->instance->setAccountHolderName($value);
        return $this;
    }

    /**
     * Sets exp date field.
     */
    public function expDate(?array $value): self
    {
        $this->instance->setExpDate($value);
        return $this;
    }

    /**
     * Sets cvv field.
     */
    public function cvv(?array $value): self
    {
        $this->instance->setCvv($value);
        return $this;
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?array $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Sets billing address field.
     */
    public function billingAddress(?array $value): self
    {
        $this->instance->setBillingAddress($value);
        return $this;
    }

    /**
     * Sets contact id field.
     */
    public function contactId(?array $value): self
    {
        $this->instance->setContactId($value);
        return $this;
    }

    /**
     * Sets contact api id field.
     */
    public function contactApiId(?array $value): self
    {
        $this->instance->setContactApiId($value);
        return $this;
    }

    /**
     * Sets location id field.
     */
    public function locationId(?array $value): self
    {
        $this->instance->setLocationId($value);
        return $this;
    }

    /**
     * Sets location api id field.
     */
    public function locationApiId(?array $value): self
    {
        $this->instance->setLocationApiId($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?array $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets created ts field.
     */
    public function createdTs(?array $value): self
    {
        $this->instance->setCreatedTs($value);
        return $this;
    }

    /**
     * Sets created user id field.
     */
    public function createdUserId(?array $value): self
    {
        $this->instance->setCreatedUserId($value);
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
     * Initializes a new sort 27 object.
     */
    public function build(): Sort27
    {
        return CoreHelper::clone($this->instance);
    }
}