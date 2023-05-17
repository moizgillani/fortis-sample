<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\QuickInvoiceSetting;

/**
 * Builder for model QuickInvoiceSetting
 *
 * @see QuickInvoiceSetting
 */
class QuickInvoiceSettingBuilder
{
    /**
     * @var QuickInvoiceSetting
     */
    private $instance;

    private function __construct(QuickInvoiceSetting $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new quick invoice setting Builder object.
     */
    public static function init(
        string $locationId,
        string $quickInvoiceTemplate,
        bool $defaultAllowPartialPay,
        bool $defaultNotificationOnDueDate,
        float $defaultNotificationDaysAfterDueDate,
        float $defaultNotificationDaysBeforeDueDate,
        string $id
    ): self {
        return new self(new QuickInvoiceSetting(
            $locationId,
            $quickInvoiceTemplate,
            $defaultAllowPartialPay,
            $defaultNotificationOnDueDate,
            $defaultNotificationDaysAfterDueDate,
            $defaultNotificationDaysBeforeDueDate,
            $id
        ));
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
     * Initializes a new quick invoice setting object.
     */
    public function build(): QuickInvoiceSetting
    {
        return CoreHelper::clone($this->instance);
    }
}
