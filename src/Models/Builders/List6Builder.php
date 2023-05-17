<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\AchProductTransaction;
use FortisAPILib\Models\CcProductTransaction;
use FortisAPILib\Models\Contact1;
use FortisAPILib\Models\CreatedUser;
use FortisAPILib\Models\EmailBlacklist;
use FortisAPILib\Models\List6;
use FortisAPILib\Models\Location;
use FortisAPILib\Models\LogSms;
use FortisAPILib\Models\ModifiedUser;
use FortisAPILib\Models\QuickInvoiceSetting;
use FortisAPILib\Models\SmsBlacklist;
use FortisAPILib\Utils\FileWrapper;

/**
 * Builder for model List6
 *
 * @see List6
 */
class List6Builder
{
    /**
     * @var List6
     */
    private $instance;

    private function __construct(List6 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list 6 Builder object.
     */
    public static function init(
        string $title,
        string $dueDate,
        array $itemList,
        string $id,
        int $createdTs,
        int $modifiedTs
    ): self {
        return new self(new List6($title, $dueDate, $itemList, $id, $createdTs, $modifiedTs));
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
     * Sets cc product transaction id field.
     */
    public function ccProductTransactionId(?string $value): self
    {
        $this->instance->setCcProductTransactionId($value);
        return $this;
    }

    /**
     * Unsets cc product transaction id field.
     */
    public function unsetCcProductTransactionId(): self
    {
        $this->instance->unsetCcProductTransactionId();
        return $this;
    }

    /**
     * Sets ach product transaction id field.
     */
    public function achProductTransactionId(?string $value): self
    {
        $this->instance->setAchProductTransactionId($value);
        return $this;
    }

    /**
     * Unsets ach product transaction id field.
     */
    public function unsetAchProductTransactionId(): self
    {
        $this->instance->unsetAchProductTransactionId();
        return $this;
    }

    /**
     * Sets allow overpayment field.
     */
    public function allowOverpayment(?bool $value): self
    {
        $this->instance->setAllowOverpayment($value);
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
     * Sets email field.
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Unsets email field.
     */
    public function unsetEmail(): self
    {
        $this->instance->unsetEmail();
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
     * Sets contact api id field.
     */
    public function contactApiId(?string $value): self
    {
        $this->instance->setContactApiId($value);
        return $this;
    }

    /**
     * Unsets contact api id field.
     */
    public function unsetContactApiId(): self
    {
        $this->instance->unsetContactApiId();
        return $this;
    }

    /**
     * Sets quick invoice api id field.
     */
    public function quickInvoiceApiId(?string $value): self
    {
        $this->instance->setQuickInvoiceApiId($value);
        return $this;
    }

    /**
     * Unsets quick invoice api id field.
     */
    public function unsetQuickInvoiceApiId(): self
    {
        $this->instance->unsetQuickInvoiceApiId();
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?string $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Unsets customer id field.
     */
    public function unsetCustomerId(): self
    {
        $this->instance->unsetCustomerId();
        return $this;
    }

    /**
     * Sets expire date field.
     */
    public function expireDate(?string $value): self
    {
        $this->instance->setExpireDate($value);
        return $this;
    }

    /**
     * Unsets expire date field.
     */
    public function unsetExpireDate(): self
    {
        $this->instance->unsetExpireDate();
        return $this;
    }

    /**
     * Sets allow partial pay field.
     */
    public function allowPartialPay(?bool $value): self
    {
        $this->instance->setAllowPartialPay($value);
        return $this;
    }

    /**
     * Sets attach files to email field.
     */
    public function attachFilesToEmail(?bool $value): self
    {
        $this->instance->setAttachFilesToEmail($value);
        return $this;
    }

    /**
     * Sets send email field.
     */
    public function sendEmail(?bool $value): self
    {
        $this->instance->setSendEmail($value);
        return $this;
    }

    /**
     * Sets invoice number field.
     */
    public function invoiceNumber(?string $value): self
    {
        $this->instance->setInvoiceNumber($value);
        return $this;
    }

    /**
     * Unsets invoice number field.
     */
    public function unsetInvoiceNumber(): self
    {
        $this->instance->unsetInvoiceNumber();
        return $this;
    }

    /**
     * Sets item header field.
     */
    public function itemHeader(?string $value): self
    {
        $this->instance->setItemHeader($value);
        return $this;
    }

    /**
     * Unsets item header field.
     */
    public function unsetItemHeader(): self
    {
        $this->instance->unsetItemHeader();
        return $this;
    }

    /**
     * Sets item footer field.
     */
    public function itemFooter(?string $value): self
    {
        $this->instance->setItemFooter($value);
        return $this;
    }

    /**
     * Unsets item footer field.
     */
    public function unsetItemFooter(): self
    {
        $this->instance->unsetItemFooter();
        return $this;
    }

    /**
     * Sets amount due field.
     */
    public function amountDue(?float $value): self
    {
        $this->instance->setAmountDue($value);
        return $this;
    }

    /**
     * Unsets amount due field.
     */
    public function unsetAmountDue(): self
    {
        $this->instance->unsetAmountDue();
        return $this;
    }

    /**
     * Sets notification email field.
     */
    public function notificationEmail(?string $value): self
    {
        $this->instance->setNotificationEmail($value);
        return $this;
    }

    /**
     * Unsets notification email field.
     */
    public function unsetNotificationEmail(): self
    {
        $this->instance->unsetNotificationEmail();
        return $this;
    }

    /**
     * Sets status id field.
     */
    public function statusId(?int $value): self
    {
        $this->instance->setStatusId($value);
        return $this;
    }

    /**
     * Unsets status id field.
     */
    public function unsetStatusId(): self
    {
        $this->instance->unsetStatusId();
        return $this;
    }

    /**
     * Sets status code field.
     */
    public function statusCode(?int $value): self
    {
        $this->instance->setStatusCode($value);
        return $this;
    }

    /**
     * Unsets status code field.
     */
    public function unsetStatusCode(): self
    {
        $this->instance->unsetStatusCode();
        return $this;
    }

    /**
     * Sets note field.
     */
    public function note(?string $value): self
    {
        $this->instance->setNote($value);
        return $this;
    }

    /**
     * Unsets note field.
     */
    public function unsetNote(): self
    {
        $this->instance->unsetNote();
        return $this;
    }

    /**
     * Sets notification days before due date field.
     */
    public function notificationDaysBeforeDueDate(?int $value): self
    {
        $this->instance->setNotificationDaysBeforeDueDate($value);
        return $this;
    }

    /**
     * Unsets notification days before due date field.
     */
    public function unsetNotificationDaysBeforeDueDate(): self
    {
        $this->instance->unsetNotificationDaysBeforeDueDate();
        return $this;
    }

    /**
     * Sets notification days after due date field.
     */
    public function notificationDaysAfterDueDate(?int $value): self
    {
        $this->instance->setNotificationDaysAfterDueDate($value);
        return $this;
    }

    /**
     * Unsets notification days after due date field.
     */
    public function unsetNotificationDaysAfterDueDate(): self
    {
        $this->instance->unsetNotificationDaysAfterDueDate();
        return $this;
    }

    /**
     * Sets notification on due date field.
     */
    public function notificationOnDueDate(?bool $value): self
    {
        $this->instance->setNotificationOnDueDate($value);
        return $this;
    }

    /**
     * Sets send text to pay field.
     */
    public function sendTextToPay(?bool $value): self
    {
        $this->instance->setSendTextToPay($value);
        return $this;
    }

    /**
     * Sets files field.
     */
    public function files(?array $value): self
    {
        $this->instance->setFiles($value);
        return $this;
    }

    /**
     * Sets remaining balance field.
     */
    public function remainingBalance(?float $value): self
    {
        $this->instance->setRemainingBalance($value);
        return $this;
    }

    /**
     * Unsets remaining balance field.
     */
    public function unsetRemainingBalance(): self
    {
        $this->instance->unsetRemainingBalance();
        return $this;
    }

    /**
     * Sets single payment min amount field.
     */
    public function singlePaymentMinAmount(?int $value): self
    {
        $this->instance->setSinglePaymentMinAmount($value);
        return $this;
    }

    /**
     * Unsets single payment min amount field.
     */
    public function unsetSinglePaymentMinAmount(): self
    {
        $this->instance->unsetSinglePaymentMinAmount();
        return $this;
    }

    /**
     * Sets single payment max amount field.
     */
    public function singlePaymentMaxAmount(?int $value): self
    {
        $this->instance->setSinglePaymentMaxAmount($value);
        return $this;
    }

    /**
     * Unsets single payment max amount field.
     */
    public function unsetSinglePaymentMaxAmount(): self
    {
        $this->instance->unsetSinglePaymentMaxAmount();
        return $this;
    }

    /**
     * Sets cell phone field.
     */
    public function cellPhone(?string $value): self
    {
        $this->instance->setCellPhone($value);
        return $this;
    }

    /**
     * Unsets cell phone field.
     */
    public function unsetCellPhone(): self
    {
        $this->instance->unsetCellPhone();
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
     * Sets active field.
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
        return $this;
    }

    /**
     * Sets payment status id field.
     */
    public function paymentStatusId(?int $value): self
    {
        $this->instance->setPaymentStatusId($value);
        return $this;
    }

    /**
     * Unsets payment status id field.
     */
    public function unsetPaymentStatusId(): self
    {
        $this->instance->unsetPaymentStatusId();
        return $this;
    }

    /**
     * Sets is active field.
     */
    public function isActive(?bool $value): self
    {
        $this->instance->setIsActive($value);
        return $this;
    }

    /**
     * Sets quick invoice setting field.
     */
    public function quickInvoiceSetting(?QuickInvoiceSetting $value): self
    {
        $this->instance->setQuickInvoiceSetting($value);
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
     * Sets quick invoice views field.
     */
    public function quickInvoiceViews(?array $value): self
    {
        $this->instance->setQuickInvoiceViews($value);
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
     * Sets created user field.
     */
    public function createdUser(?CreatedUser $value): self
    {
        $this->instance->setCreatedUser($value);
        return $this;
    }

    /**
     * Sets modified user field.
     */
    public function modifiedUser(?ModifiedUser $value): self
    {
        $this->instance->setModifiedUser($value);
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
     * Sets contact field.
     */
    public function contact(?Contact1 $value): self
    {
        $this->instance->setContact($value);
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
     * Sets log sms field.
     */
    public function logSms(?LogSms $value): self
    {
        $this->instance->setLogSms($value);
        return $this;
    }

    /**
     * Sets transactions field.
     */
    public function transactions(?array $value): self
    {
        $this->instance->setTransactions($value);
        return $this;
    }

    /**
     * Sets cc product transaction field.
     */
    public function ccProductTransaction(?CcProductTransaction $value): self
    {
        $this->instance->setCcProductTransaction($value);
        return $this;
    }

    /**
     * Sets ach product transaction field.
     */
    public function achProductTransaction(?AchProductTransaction $value): self
    {
        $this->instance->setAchProductTransaction($value);
        return $this;
    }

    /**
     * Sets email blacklist field.
     */
    public function emailBlacklist(?EmailBlacklist $value): self
    {
        $this->instance->setEmailBlacklist($value);
        return $this;
    }

    /**
     * Sets sms blacklist field.
     */
    public function smsBlacklist(?SmsBlacklist $value): self
    {
        $this->instance->setSmsBlacklist($value);
        return $this;
    }

    /**
     * Sets payment url field.
     */
    public function paymentUrl(?string $value): self
    {
        $this->instance->setPaymentUrl($value);
        return $this;
    }

    /**
     * Unsets payment url field.
     */
    public function unsetPaymentUrl(): self
    {
        $this->instance->unsetPaymentUrl();
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
     * Initializes a new list 6 object.
     */
    public function build(): List6
    {
        return CoreHelper::clone($this->instance);
    }
}