<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\AccountVault;
use FortisAPILib\Models\Contact1;
use FortisAPILib\Models\CreatedUser;
use FortisAPILib\Models\Data12;
use FortisAPILib\Models\Forecast;
use FortisAPILib\Models\Joi;
use FortisAPILib\Models\Location;
use FortisAPILib\Models\ProductTransaction;
use FortisAPILib\Models\Signature;

/**
 * Builder for model Data12
 *
 * @see Data12
 */
class Data12Builder
{
    /**
     * @var Data12
     */
    private $instance;

    private function __construct(Data12 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new data 12 Builder object.
     */
    public static function init(
        bool $active,
        int $interval,
        string $intervalType,
        string $locationId,
        string $paymentMethod,
        string $startDate,
        string $status,
        int $transactionAmount,
        string $id,
        string $nextRunDate,
        int $createdTs,
        int $modifiedTs,
        string $recurringTypeId
    ): self {
        return new self(new Data12(
            $active,
            $interval,
            $intervalType,
            $locationId,
            $paymentMethod,
            $startDate,
            $status,
            $transactionAmount,
            $id,
            $nextRunDate,
            $createdTs,
            $modifiedTs,
            $recurringTypeId
        ));
    }

    /**
     * Sets account vault id field.
     */
    public function accountVaultId(?string $value): self
    {
        $this->instance->setAccountVaultId($value);
        return $this;
    }

    /**
     * Sets token id field.
     */
    public function tokenId(?string $value): self
    {
        $this->instance->setTokenId($value);
        return $this;
    }

    /**
     * Sets account vault api id field.
     */
    public function accountVaultApiId(?string $value): self
    {
        $this->instance->setAccountVaultApiId($value);
        return $this;
    }

    /**
     * Unsets account vault api id field.
     */
    public function unsetAccountVaultApiId(): self
    {
        $this->instance->unsetAccountVaultApiId();
        return $this;
    }

    /**
     * Sets token api id field.
     */
    public function tokenApiId(?string $value): self
    {
        $this->instance->setTokenApiId($value);
        return $this;
    }

    /**
     * Unsets token api id field.
     */
    public function unsetTokenApiId(): self
    {
        $this->instance->unsetTokenApiId();
        return $this;
    }

    /**
     * Sets joi field.
     */
    public function joi(?Joi $value): self
    {
        $this->instance->setJoi($value);
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
        return $this;
    }

    /**
     * Sets end date field.
     */
    public function endDate(?string $value): self
    {
        $this->instance->setEndDate($value);
        return $this;
    }

    /**
     * Unsets end date field.
     */
    public function unsetEndDate(): self
    {
        $this->instance->unsetEndDate();
        return $this;
    }

    /**
     * Sets installment total count field.
     */
    public function installmentTotalCount(?int $value): self
    {
        $this->instance->setInstallmentTotalCount($value);
        return $this;
    }

    /**
     * Unsets installment total count field.
     */
    public function unsetInstallmentTotalCount(): self
    {
        $this->instance->unsetInstallmentTotalCount();
        return $this;
    }

    /**
     * Sets notification days field.
     */
    public function notificationDays(?int $value): self
    {
        $this->instance->setNotificationDays($value);
        return $this;
    }

    /**
     * Unsets notification days field.
     */
    public function unsetNotificationDays(): self
    {
        $this->instance->unsetNotificationDays();
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
     * Sets recurring id field.
     */
    public function recurringId(?string $value): self
    {
        $this->instance->setRecurringId($value);
        return $this;
    }

    /**
     * Unsets recurring id field.
     */
    public function unsetRecurringId(): self
    {
        $this->instance->unsetRecurringId();
        return $this;
    }

    /**
     * Sets recurring api id field.
     */
    public function recurringApiId(?string $value): self
    {
        $this->instance->setRecurringApiId($value);
        return $this;
    }

    /**
     * Unsets recurring api id field.
     */
    public function unsetRecurringApiId(): self
    {
        $this->instance->unsetRecurringApiId();
        return $this;
    }

    /**
     * Sets terms agree field.
     */
    public function termsAgree(?bool $value): self
    {
        $this->instance->setTermsAgree($value);
        return $this;
    }

    /**
     * Sets terms agree ip field.
     */
    public function termsAgreeIp(?string $value): self
    {
        $this->instance->setTermsAgreeIp($value);
        return $this;
    }

    /**
     * Unsets terms agree ip field.
     */
    public function unsetTermsAgreeIp(): self
    {
        $this->instance->unsetTermsAgreeIp();
        return $this;
    }

    /**
     * Sets recurring c 1 field.
     */
    public function recurringC1(?string $value): self
    {
        $this->instance->setRecurringC1($value);
        return $this;
    }

    /**
     * Unsets recurring c 1 field.
     */
    public function unsetRecurringC1(): self
    {
        $this->instance->unsetRecurringC1();
        return $this;
    }

    /**
     * Sets recurring c 2 field.
     */
    public function recurringC2(?string $value): self
    {
        $this->instance->setRecurringC2($value);
        return $this;
    }

    /**
     * Unsets recurring c 2 field.
     */
    public function unsetRecurringC2(): self
    {
        $this->instance->unsetRecurringC2();
        return $this;
    }

    /**
     * Sets recurring c 3 field.
     */
    public function recurringC3(?string $value): self
    {
        $this->instance->setRecurringC3($value);
        return $this;
    }

    /**
     * Unsets recurring c 3 field.
     */
    public function unsetRecurringC3(): self
    {
        $this->instance->unsetRecurringC3();
        return $this;
    }

    /**
     * Sets send to proc as recur field.
     */
    public function sendToProcAsRecur(?bool $value): self
    {
        $this->instance->setSendToProcAsRecur($value);
        return $this;
    }

    /**
     * Sets installment amount total field.
     */
    public function installmentAmountTotal(?int $value): self
    {
        $this->instance->setInstallmentAmountTotal($value);
        return $this;
    }

    /**
     * Unsets installment amount total field.
     */
    public function unsetInstallmentAmountTotal(): self
    {
        $this->instance->unsetInstallmentAmountTotal();
        return $this;
    }

    /**
     * Sets log emails field.
     */
    public function logEmails(?array $value): self
    {
        $this->instance->setLogEmails($value);
        return $this;
    }

    /**
     * Sets contact field.
     */
    public function contact(?Contact1 $value): self
    {
        $this->instance->setContact($value);
        return $this;
    }

    /**
     * Sets account vault field.
     */
    public function accountVault(?AccountVault $value): self
    {
        $this->instance->setAccountVault($value);
        return $this;
    }

    /**
     * Sets created user field.
     */
    public function createdUser(?CreatedUser $value): self
    {
        $this->instance->setCreatedUser($value);
        return $this;
    }

    /**
     * Sets signature field.
     */
    public function signature(?Signature $value): self
    {
        $this->instance->setSignature($value);
        return $this;
    }

    /**
     * Sets payment schedule field.
     */
    public function paymentSchedule(?array $value): self
    {
        $this->instance->setPaymentSchedule($value);
        return $this;
    }

    /**
     * Sets location field.
     */
    public function location(?Location $value): self
    {
        $this->instance->setLocation($value);
        return $this;
    }

    /**
     * Sets product transaction field.
     */
    public function productTransaction(?ProductTransaction $value): self
    {
        $this->instance->setProductTransaction($value);
        return $this;
    }

    /**
     * Sets next run date min field.
     */
    public function nextRunDateMin(?string $value): self
    {
        $this->instance->setNextRunDateMin($value);
        return $this;
    }

    /**
     * Sets next run date max field.
     */
    public function nextRunDateMax(?string $value): self
    {
        $this->instance->setNextRunDateMax($value);
        return $this;
    }

    /**
     * Sets tags field.
     */
    public function tags(?array $value): self
    {
        $this->instance->setTags($value);
        return $this;
    }

    /**
     * Sets all tags field.
     */
    public function allTags(?array $value): self
    {
        $this->instance->setAllTags($value);
        return $this;
    }

    /**
     * Sets changelogs field.
     */
    public function changelogs(?array $value): self
    {
        $this->instance->setChangelogs($value);
        return $this;
    }

    /**
     * Sets forecast field.
     */
    public function forecast(?Forecast $value): self
    {
        $this->instance->setForecast($value);
        return $this;
    }

    /**
     * Sets recurring splits field.
     */
    public function recurringSplits(?array $value): self
    {
        $this->instance->setRecurringSplits($value);
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
     * Initializes a new data 12 object.
     */
    public function build(): Data12
    {
        return CoreHelper::clone($this->instance);
    }
}
