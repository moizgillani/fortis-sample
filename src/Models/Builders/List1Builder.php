<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\Address;
use FortisAPILib\Models\Children;
use FortisAPILib\Models\CreatedUser;
use FortisAPILib\Models\EmailBlacklist;
use FortisAPILib\Models\List1;
use FortisAPILib\Models\Location;
use FortisAPILib\Models\MParent;
use FortisAPILib\Models\SmsBlacklist;
use FortisAPILib\Models\User1;

/**
 * Builder for model List1
 *
 * @see List1
 */
class List1Builder
{
    /**
     * @var List1
     */
    private $instance;

    private function __construct(List1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list 1 Builder object.
     */
    public static function init(
        string $locationId,
        string $lastName,
        bool $emailTrxReceipt,
        int $headerMessageType,
        string $id,
        int $createdTs,
        int $modifiedTs,
        bool $active
    ): self {
        return new self(new List1(
            $locationId,
            $lastName,
            $emailTrxReceipt,
            $headerMessageType,
            $id,
            $createdTs,
            $modifiedTs,
            $active
        ));
    }

    /**
     * Sets account number field.
     */
    public function accountNumber(?string $value): self
    {
        $this->instance->setAccountNumber($value);
        return $this;
    }

    /**
     * Unsets account number field.
     */
    public function unsetAccountNumber(): self
    {
        $this->instance->unsetAccountNumber();
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
     * Sets first name field.
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Unsets first name field.
     */
    public function unsetFirstName(): self
    {
        $this->instance->unsetFirstName();
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
     * Sets balance field.
     */
    public function balance(?float $value): self
    {
        $this->instance->setBalance($value);
        return $this;
    }

    /**
     * Unsets balance field.
     */
    public function unsetBalance(): self
    {
        $this->instance->unsetBalance();
        return $this;
    }

    /**
     * Sets address field.
     */
    public function address(?Address $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets company name field.
     */
    public function companyName(?string $value): self
    {
        $this->instance->setCompanyName($value);
        return $this;
    }

    /**
     * Unsets company name field.
     */
    public function unsetCompanyName(): self
    {
        $this->instance->unsetCompanyName();
        return $this;
    }

    /**
     * Sets header message field.
     */
    public function headerMessage(?string $value): self
    {
        $this->instance->setHeaderMessage($value);
        return $this;
    }

    /**
     * Unsets header message field.
     */
    public function unsetHeaderMessage(): self
    {
        $this->instance->unsetHeaderMessage();
        return $this;
    }

    /**
     * Sets date of birth field.
     */
    public function dateOfBirth(?string $value): self
    {
        $this->instance->setDateOfBirth($value);
        return $this;
    }

    /**
     * Unsets date of birth field.
     */
    public function unsetDateOfBirth(): self
    {
        $this->instance->unsetDateOfBirth();
        return $this;
    }

    /**
     * Sets home phone field.
     */
    public function homePhone(?string $value): self
    {
        $this->instance->setHomePhone($value);
        return $this;
    }

    /**
     * Unsets home phone field.
     */
    public function unsetHomePhone(): self
    {
        $this->instance->unsetHomePhone();
        return $this;
    }

    /**
     * Sets office phone field.
     */
    public function officePhone(?string $value): self
    {
        $this->instance->setOfficePhone($value);
        return $this;
    }

    /**
     * Unsets office phone field.
     */
    public function unsetOfficePhone(): self
    {
        $this->instance->unsetOfficePhone();
        return $this;
    }

    /**
     * Sets office phone ext field.
     */
    public function officePhoneExt(?string $value): self
    {
        $this->instance->setOfficePhoneExt($value);
        return $this;
    }

    /**
     * Unsets office phone ext field.
     */
    public function unsetOfficePhoneExt(): self
    {
        $this->instance->unsetOfficePhoneExt();
        return $this;
    }

    /**
     * Sets update if exists field.
     */
    public function updateIfExists(?int $value): self
    {
        $this->instance->setUpdateIfExists($value);
        return $this;
    }

    /**
     * Unsets update if exists field.
     */
    public function unsetUpdateIfExists(): self
    {
        $this->instance->unsetUpdateIfExists();
        return $this;
    }

    /**
     * Sets contact c 1 field.
     */
    public function contactC1(?string $value): self
    {
        $this->instance->setContactC1($value);
        return $this;
    }

    /**
     * Unsets contact c 1 field.
     */
    public function unsetContactC1(): self
    {
        $this->instance->unsetContactC1();
        return $this;
    }

    /**
     * Sets contact c 2 field.
     */
    public function contactC2(?string $value): self
    {
        $this->instance->setContactC2($value);
        return $this;
    }

    /**
     * Unsets contact c 2 field.
     */
    public function unsetContactC2(): self
    {
        $this->instance->unsetContactC2();
        return $this;
    }

    /**
     * Sets contact c 3 field.
     */
    public function contactC3(?string $value): self
    {
        $this->instance->setContactC3($value);
        return $this;
    }

    /**
     * Unsets contact c 3 field.
     */
    public function unsetContactC3(): self
    {
        $this->instance->unsetContactC3();
        return $this;
    }

    /**
     * Sets parent id field.
     */
    public function parentId(?string $value): self
    {
        $this->instance->setParentId($value);
        return $this;
    }

    /**
     * Unsets parent id field.
     */
    public function unsetParentId(): self
    {
        $this->instance->unsetParentId();
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
     * Sets received emails field.
     */
    public function receivedEmails(?array $value): self
    {
        $this->instance->setReceivedEmails($value);
        return $this;
    }

    /**
     * Sets is deletable field.
     */
    public function isDeletable(?bool $value): self
    {
        $this->instance->setIsDeletable($value);
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
     * Sets user field.
     */
    public function user(?User1 $value): self
    {
        $this->instance->setUser($value);
        return $this;
    }

    /**
     * Sets recurrings field.
     */
    public function recurrings(?array $value): self
    {
        $this->instance->setRecurrings($value);
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
     * Sets changelogs field.
     */
    public function changelogs(?array $value): self
    {
        $this->instance->setChangelogs($value);
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
     * Sets created user field.
     */
    public function createdUser(?CreatedUser $value): self
    {
        $this->instance->setCreatedUser($value);
        return $this;
    }

    /**
     * Sets parent field.
     */
    public function parent(?MParent $value): self
    {
        $this->instance->setParent($value);
        return $this;
    }

    /**
     * Sets children field.
     */
    public function children(?Children $value): self
    {
        $this->instance->setChildren($value);
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
     * Initializes a new list 1 object.
     */
    public function build(): List1
    {
        return CoreHelper::clone($this->instance);
    }
}
