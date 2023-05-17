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

/**
 * Builder for model Data5
 *
 * @see Data5
 */
class Data5Builder
{
    /**
     * @var Data5
     */
    private $instance;

    private function __construct(Data5 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data 5 Builder object.
     */
    public static function init(string $clientToken): self
    {
        return new self(new Data5($clientToken));
    }

    /**
     * Sets action field.
     */
    public function action(?string $value): self
    {
        $this->instance->setAction($value);
        return $this;
    }

    /**
     * Unsets action field.
     */
    public function unsetAction(): self
    {
        $this->instance->unsetAction();
        return $this;
    }

    /**
     * Sets methods field.
     */
    public function methods(?array $value): self
    {
        $this->instance->setMethods($value);
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?int $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets tax amount field.
     */
    public function taxAmount(?int $value): self
    {
        $this->instance->setTaxAmount($value);
        return $this;
    }

    /**
     * Sets secondary amount field.
     */
    public function secondaryAmount(?int $value): self
    {
        $this->instance->setSecondaryAmount($value);
        return $this;
    }

    /**
     * Sets location id field.
     */
    public function locationId(?string $value): self
    {
        $this->instance->setLocationId($value);
        return $this;
    }

    /**
     * Unsets location id field.
     */
    public function unsetLocationId(): self
    {
        $this->instance->unsetLocationId();
        return $this;
    }

    /**
     * Sets contact id field.
     */
    public function contactId(?string $value): self
    {
        $this->instance->setContactId($value);
        return $this;
    }

    /**
     * Unsets contact id field.
     */
    public function unsetContactId(): self
    {
        $this->instance->unsetContactId();
        return $this;
    }

    /**
     * Sets save account field.
     */
    public function saveAccount(?bool $value): self
    {
        $this->instance->setSaveAccount($value);
        return $this;
    }

    /**
     * Sets save account title field.
     */
    public function saveAccountTitle(?string $value): self
    {
        $this->instance->setSaveAccountTitle($value);
        return $this;
    }

    /**
     * Sets title field.
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets ach sec code field.
     */
    public function achSecCode(?string $value): self
    {
        $this->instance->setAchSecCode($value);
        return $this;
    }

    /**
     * Unsets ach sec code field.
     */
    public function unsetAchSecCode(): self
    {
        $this->instance->unsetAchSecCode();
        return $this;
    }

    /**
     * Sets bank funded only override field.
     */
    public function bankFundedOnlyOverride(?bool $value): self
    {
        $this->instance->setBankFundedOnlyOverride($value);
        return $this;
    }

    /**
     * Sets allow partial authorization override field.
     */
    public function allowPartialAuthorizationOverride(?bool $value): self
    {
        $this->instance->setAllowPartialAuthorizationOverride($value);
        return $this;
    }

    /**
     * Sets auto decline cvv override field.
     */
    public function autoDeclineCvvOverride(?bool $value): self
    {
        $this->instance->setAutoDeclineCvvOverride($value);
        return $this;
    }

    /**
     * Sets auto decline street override field.
     */
    public function autoDeclineStreetOverride(?bool $value): self
    {
        $this->instance->setAutoDeclineStreetOverride($value);
        return $this;
    }

    /**
     * Sets auto decline zip override field.
     */
    public function autoDeclineZipOverride(?bool $value): self
    {
        $this->instance->setAutoDeclineZipOverride($value);
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
     * Initializes a new data 5 object.
     */
    public function build(): Data5
    {
        return CoreHelper::clone($this->instance);
    }
}