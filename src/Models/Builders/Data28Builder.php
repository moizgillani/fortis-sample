<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Data28;

/**
 * Builder for model Data28
 *
 * @see Data28
 */
class Data28Builder
{
    /**
     * @var Data28
     */
    private $instance;

    private function __construct(Data28 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data 28 Builder object.
     */
    public static function init(
        bool $isActive,
        string $locationId,
        bool $onCreate,
        bool $onUpdate,
        bool $onDelete,
        string $resource,
        int $numberOfAttempts,
        string $url,
        string $id
    ): self {
        return new self(new Data28(
            $isActive,
            $locationId,
            $onCreate,
            $onUpdate,
            $onDelete,
            $resource,
            $numberOfAttempts,
            $url,
            $id
        ));
    }

    /**
     * Sets attempt interval field.
     */
    public function attemptInterval(?int $value): self
    {
        $this->instance->setAttemptInterval($value);
        return $this;
    }

    /**
     * Unsets attempt interval field.
     */
    public function unsetAttemptInterval(): self
    {
        $this->instance->unsetAttemptInterval();
        return $this;
    }

    /**
     * Sets basic auth username field.
     */
    public function basicAuthUsername(?string $value): self
    {
        $this->instance->setBasicAuthUsername($value);
        return $this;
    }

    /**
     * Unsets basic auth username field.
     */
    public function unsetBasicAuthUsername(): self
    {
        $this->instance->unsetBasicAuthUsername();
        return $this;
    }

    /**
     * Sets basic auth password field.
     */
    public function basicAuthPassword(?string $value): self
    {
        $this->instance->setBasicAuthPassword($value);
        return $this;
    }

    /**
     * Unsets basic auth password field.
     */
    public function unsetBasicAuthPassword(): self
    {
        $this->instance->unsetBasicAuthPassword();
        return $this;
    }

    /**
     * Sets expands field.
     */
    public function expands(?string $value): self
    {
        $this->instance->setExpands($value);
        return $this;
    }

    /**
     * Unsets expands field.
     */
    public function unsetExpands(): self
    {
        $this->instance->unsetExpands();
        return $this;
    }

    /**
     * Sets format field.
     */
    public function format(?string $value): self
    {
        $this->instance->setFormat($value);
        return $this;
    }

    /**
     * Unsets format field.
     */
    public function unsetFormat(): self
    {
        $this->instance->unsetFormat();
        return $this;
    }

    /**
     * Sets location api id field.
     */
    public function locationApiId(?string $value): self
    {
        $this->instance->setLocationApiId($value);
        return $this;
    }

    /**
     * Unsets location api id field.
     */
    public function unsetLocationApiId(): self
    {
        $this->instance->unsetLocationApiId();
        return $this;
    }

    /**
     * Sets postback config id field.
     */
    public function postbackConfigId(?string $value): self
    {
        $this->instance->setPostbackConfigId($value);
        return $this;
    }

    /**
     * Unsets postback config id field.
     */
    public function unsetPostbackConfigId(): self
    {
        $this->instance->unsetPostbackConfigId();
        return $this;
    }

    /**
     * Sets product transaction id field.
     */
    public function productTransactionId(?string $value): self
    {
        $this->instance->setProductTransactionId($value);
        return $this;
    }

    /**
     * Unsets product transaction id field.
     */
    public function unsetProductTransactionId(): self
    {
        $this->instance->unsetProductTransactionId();
        return $this;
    }

    /**
     * Sets postback logs field.
     */
    public function postbackLogs(?array $value): self
    {
        $this->instance->setPostbackLogs($value);
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
     * Initializes a new data 28 object.
     */
    public function build(): Data28
    {
        return CoreHelper::clone($this->instance);
    }
}
