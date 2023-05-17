<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\List8;

/**
 * Builder for model List8
 *
 * @see List8
 */
class List8Builder
{
    /**
     * @var List8
     */
    private $instance;

    private function __construct(List8 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list 8 Builder object.
     */
    public static function init(
        string $signature,
        string $resource,
        string $resourceId,
        string $id,
        int $createdTs,
        int $modifiedTs
    ): self {
        return new self(new List8($signature, $resource, $resourceId, $id, $createdTs, $modifiedTs));
    }

    /**
     * Sets raw signature field.
     */
    public function rawSignature(?string $value): self
    {
        $this->instance->setRawSignature($value);
        return $this;
    }

    /**
     * Unsets raw signature field.
     */
    public function unsetRawSignature(): self
    {
        $this->instance->unsetRawSignature();
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
     * Initializes a new list 8 object.
     */
    public function build(): List8
    {
        return CoreHelper::clone($this->instance);
    }
}
