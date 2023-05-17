<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class Location17 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $createdTs;

    /**
     * @var int
     */
    private $modifiedTs;

    /**
     * @var array
     */
    private $accountNumber = [];

    /**
     * @var Address1|null
     */
    private $address;

    /**
     * @var array
     */
    private $brandingDomainId = [];

    /**
     * @var bool|null
     */
    private $contactEmailTrxReceiptDefault;

    /**
     * @var array
     */
    private $defaultAch = [];

    /**
     * @var array
     */
    private $defaultCc = [];

    /**
     * @var array
     */
    private $emailReplyTo = [];

    /**
     * @var array
     */
    private $fax = [];

    /**
     * @var array
     */
    private $locationApiId = [];

    /**
     * @var array
     */
    private $locationApiKey = [];

    /**
     * @var array
     */
    private $locationC1 = [];

    /**
     * @var array
     */
    private $locationC2 = [];

    /**
     * @var array
     */
    private $locationC3 = [];

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $officePhone = [];

    /**
     * @var array
     */
    private $officeExtPhone = [];

    /**
     * @var array
     */
    private $tz = [];

    /**
     * @var string
     */
    private $parentId;

    /**
     * @var bool|null
     */
    private $showContactNotes;

    /**
     * @var bool|null
     */
    private $showContactFiles;

    /**
     * @var array
     */
    private $ticketHashKey = [];

    /**
     * @param string $id
     * @param int $createdTs
     * @param int $modifiedTs
     * @param string $name
     * @param string $parentId
     */
    public function __construct(string $id, int $createdTs, int $modifiedTs, string $name, string $parentId)
    {
        $this->id = $id;
        $this->createdTs = $createdTs;
        $this->modifiedTs = $modifiedTs;
        $this->name = $name;
        $this->parentId = $parentId;
    }

    /**
     * Returns Id.
     * Location ID
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Location ID
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created Ts.
     * Created Time Stamp
     */
    public function getCreatedTs(): int
    {
        return $this->createdTs;
    }

    /**
     * Sets Created Ts.
     * Created Time Stamp
     *
     * @required
     * @maps created_ts
     */
    public function setCreatedTs(int $createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Modified Ts.
     * Modified Time Stamp
     */
    public function getModifiedTs(): int
    {
        return $this->modifiedTs;
    }

    /**
     * Sets Modified Ts.
     * Modified Time Stamp
     *
     * @required
     * @maps modified_ts
     */
    public function setModifiedTs(int $modifiedTs): void
    {
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Returns Account Number.
     * Account number
     */
    public function getAccountNumber(): ?string
    {
        if (count($this->accountNumber) == 0) {
            return null;
        }
        return $this->accountNumber['value'];
    }

    /**
     * Sets Account Number.
     * Account number
     *
     * @maps account_number
     */
    public function setAccountNumber(?string $accountNumber): void
    {
        $this->accountNumber['value'] = $accountNumber;
    }

    /**
     * Unsets Account Number.
     * Account number
     */
    public function unsetAccountNumber(): void
    {
        $this->accountNumber = [];
    }

    /**
     * Returns Address.
     * Address
     */
    public function getAddress(): ?Address1
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * Address
     *
     * @maps address
     */
    public function setAddress(?Address1 $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Branding Domain Id.
     * GUID for Branding Domain
     */
    public function getBrandingDomainId(): ?string
    {
        if (count($this->brandingDomainId) == 0) {
            return null;
        }
        return $this->brandingDomainId['value'];
    }

    /**
     * Sets Branding Domain Id.
     * GUID for Branding Domain
     *
     * @maps branding_domain_id
     */
    public function setBrandingDomainId(?string $brandingDomainId): void
    {
        $this->brandingDomainId['value'] = $brandingDomainId;
    }

    /**
     * Unsets Branding Domain Id.
     * GUID for Branding Domain
     */
    public function unsetBrandingDomainId(): void
    {
        $this->brandingDomainId = [];
    }

    /**
     * Returns Contact Email Trx Receipt Default.
     * If true, will email contact receipt for any transaction
     */
    public function getContactEmailTrxReceiptDefault(): ?bool
    {
        return $this->contactEmailTrxReceiptDefault;
    }

    /**
     * Sets Contact Email Trx Receipt Default.
     * If true, will email contact receipt for any transaction
     *
     * @maps contact_email_trx_receipt_default
     */
    public function setContactEmailTrxReceiptDefault(?bool $contactEmailTrxReceiptDefault): void
    {
        $this->contactEmailTrxReceiptDefault = $contactEmailTrxReceiptDefault;
    }

    /**
     * Returns Default Ach.
     * GUID for Location's default ACH Product Transaction
     */
    public function getDefaultAch(): ?string
    {
        if (count($this->defaultAch) == 0) {
            return null;
        }
        return $this->defaultAch['value'];
    }

    /**
     * Sets Default Ach.
     * GUID for Location's default ACH Product Transaction
     *
     * @maps default_ach
     */
    public function setDefaultAch(?string $defaultAch): void
    {
        $this->defaultAch['value'] = $defaultAch;
    }

    /**
     * Unsets Default Ach.
     * GUID for Location's default ACH Product Transaction
     */
    public function unsetDefaultAch(): void
    {
        $this->defaultAch = [];
    }

    /**
     * Returns Default Cc.
     * GUID for Location's default CC Product Transaction
     */
    public function getDefaultCc(): ?string
    {
        if (count($this->defaultCc) == 0) {
            return null;
        }
        return $this->defaultCc['value'];
    }

    /**
     * Sets Default Cc.
     * GUID for Location's default CC Product Transaction
     *
     * @maps default_cc
     */
    public function setDefaultCc(?string $defaultCc): void
    {
        $this->defaultCc['value'] = $defaultCc;
    }

    /**
     * Unsets Default Cc.
     * GUID for Location's default CC Product Transaction
     */
    public function unsetDefaultCc(): void
    {
        $this->defaultCc = [];
    }

    /**
     * Returns Email Reply To.
     * Used as from email address when sending various notifications
     */
    public function getEmailReplyTo(): ?string
    {
        if (count($this->emailReplyTo) == 0) {
            return null;
        }
        return $this->emailReplyTo['value'];
    }

    /**
     * Sets Email Reply To.
     * Used as from email address when sending various notifications
     *
     * @maps email_reply_to
     */
    public function setEmailReplyTo(?string $emailReplyTo): void
    {
        $this->emailReplyTo['value'] = $emailReplyTo;
    }

    /**
     * Unsets Email Reply To.
     * Used as from email address when sending various notifications
     */
    public function unsetEmailReplyTo(): void
    {
        $this->emailReplyTo = [];
    }

    /**
     * Returns Fax.
     * Fax number
     */
    public function getFax(): ?string
    {
        if (count($this->fax) == 0) {
            return null;
        }
        return $this->fax['value'];
    }

    /**
     * Sets Fax.
     * Fax number
     *
     * @maps fax
     */
    public function setFax(?string $fax): void
    {
        $this->fax['value'] = $fax;
    }

    /**
     * Unsets Fax.
     * Fax number
     */
    public function unsetFax(): void
    {
        $this->fax = [];
    }

    /**
     * Returns Location Api Id.
     * Location api ID
     */
    public function getLocationApiId(): ?string
    {
        if (count($this->locationApiId) == 0) {
            return null;
        }
        return $this->locationApiId['value'];
    }

    /**
     * Sets Location Api Id.
     * Location api ID
     *
     * @maps location_api_id
     */
    public function setLocationApiId(?string $locationApiId): void
    {
        $this->locationApiId['value'] = $locationApiId;
    }

    /**
     * Unsets Location Api Id.
     * Location api ID
     */
    public function unsetLocationApiId(): void
    {
        $this->locationApiId = [];
    }

    /**
     * Returns Location Api Key.
     * Location api key
     */
    public function getLocationApiKey(): ?string
    {
        if (count($this->locationApiKey) == 0) {
            return null;
        }
        return $this->locationApiKey['value'];
    }

    /**
     * Sets Location Api Key.
     * Location api key
     *
     * @maps location_api_key
     */
    public function setLocationApiKey(?string $locationApiKey): void
    {
        $this->locationApiKey['value'] = $locationApiKey;
    }

    /**
     * Unsets Location Api Key.
     * Location api key
     */
    public function unsetLocationApiKey(): void
    {
        $this->locationApiKey = [];
    }

    /**
     * Returns Location C1.
     * Can be used to store custom information for location.
     */
    public function getLocationC1(): ?string
    {
        if (count($this->locationC1) == 0) {
            return null;
        }
        return $this->locationC1['value'];
    }

    /**
     * Sets Location C1.
     * Can be used to store custom information for location.
     *
     * @maps location_c1
     */
    public function setLocationC1(?string $locationC1): void
    {
        $this->locationC1['value'] = $locationC1;
    }

    /**
     * Unsets Location C1.
     * Can be used to store custom information for location.
     */
    public function unsetLocationC1(): void
    {
        $this->locationC1 = [];
    }

    /**
     * Returns Location C2.
     * Can be used to store custom information for location.
     */
    public function getLocationC2(): ?string
    {
        if (count($this->locationC2) == 0) {
            return null;
        }
        return $this->locationC2['value'];
    }

    /**
     * Sets Location C2.
     * Can be used to store custom information for location.
     *
     * @maps location_c2
     */
    public function setLocationC2(?string $locationC2): void
    {
        $this->locationC2['value'] = $locationC2;
    }

    /**
     * Unsets Location C2.
     * Can be used to store custom information for location.
     */
    public function unsetLocationC2(): void
    {
        $this->locationC2 = [];
    }

    /**
     * Returns Location C3.
     * Can be used to store custom information for location.
     */
    public function getLocationC3(): ?string
    {
        if (count($this->locationC3) == 0) {
            return null;
        }
        return $this->locationC3['value'];
    }

    /**
     * Sets Location C3.
     * Can be used to store custom information for location.
     *
     * @maps location_c3
     */
    public function setLocationC3(?string $locationC3): void
    {
        $this->locationC3['value'] = $locationC3;
    }

    /**
     * Unsets Location C3.
     * Can be used to store custom information for location.
     */
    public function unsetLocationC3(): void
    {
        $this->locationC3 = [];
    }

    /**
     * Returns Name.
     * Name of the company
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Name of the company
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Office Phone.
     * Office phone number
     */
    public function getOfficePhone(): ?string
    {
        if (count($this->officePhone) == 0) {
            return null;
        }
        return $this->officePhone['value'];
    }

    /**
     * Sets Office Phone.
     * Office phone number
     *
     * @maps office_phone
     */
    public function setOfficePhone(?string $officePhone): void
    {
        $this->officePhone['value'] = $officePhone;
    }

    /**
     * Unsets Office Phone.
     * Office phone number
     */
    public function unsetOfficePhone(): void
    {
        $this->officePhone = [];
    }

    /**
     * Returns Office Ext Phone.
     * Office phone extension number
     */
    public function getOfficeExtPhone(): ?string
    {
        if (count($this->officeExtPhone) == 0) {
            return null;
        }
        return $this->officeExtPhone['value'];
    }

    /**
     * Sets Office Ext Phone.
     * Office phone extension number
     *
     * @maps office_ext_phone
     */
    public function setOfficeExtPhone(?string $officeExtPhone): void
    {
        $this->officeExtPhone['value'] = $officeExtPhone;
    }

    /**
     * Unsets Office Ext Phone.
     * Office phone extension number
     */
    public function unsetOfficeExtPhone(): void
    {
        $this->officeExtPhone = [];
    }

    /**
     * Returns Tz.
     * Time zone
     */
    public function getTz(): ?string
    {
        if (count($this->tz) == 0) {
            return null;
        }
        return $this->tz['value'];
    }

    /**
     * Sets Tz.
     * Time zone
     *
     * @maps tz
     */
    public function setTz(?string $tz): void
    {
        $this->tz['value'] = $tz;
    }

    /**
     * Unsets Tz.
     * Time zone
     */
    public function unsetTz(): void
    {
        $this->tz = [];
    }

    /**
     * Returns Parent Id.
     * Location GUID of the parent location
     */
    public function getParentId(): string
    {
        return $this->parentId;
    }

    /**
     * Sets Parent Id.
     * Location GUID of the parent location
     *
     * @required
     * @maps parent_id
     */
    public function setParentId(string $parentId): void
    {
        $this->parentId = $parentId;
    }

    /**
     * Returns Show Contact Notes.
     * If set to true will show 'Notes' tab on Contact
     */
    public function getShowContactNotes(): ?bool
    {
        return $this->showContactNotes;
    }

    /**
     * Sets Show Contact Notes.
     * If set to true will show 'Notes' tab on Contact
     *
     * @maps show_contact_notes
     */
    public function setShowContactNotes(?bool $showContactNotes): void
    {
        $this->showContactNotes = $showContactNotes;
    }

    /**
     * Returns Show Contact Files.
     * If set to true will show 'Files' tab on Contact
     */
    public function getShowContactFiles(): ?bool
    {
        return $this->showContactFiles;
    }

    /**
     * Sets Show Contact Files.
     * If set to true will show 'Files' tab on Contact
     *
     * @maps show_contact_files
     */
    public function setShowContactFiles(?bool $showContactFiles): void
    {
        $this->showContactFiles = $showContactFiles;
    }

    /**
     * Returns Ticket Hash Key.
     * Ticket Hash Key
     */
    public function getTicketHashKey(): ?string
    {
        if (count($this->ticketHashKey) == 0) {
            return null;
        }
        return $this->ticketHashKey['value'];
    }

    /**
     * Sets Ticket Hash Key.
     * Ticket Hash Key
     *
     * @maps ticket_hash_key
     */
    public function setTicketHashKey(?string $ticketHashKey): void
    {
        $this->ticketHashKey['value'] = $ticketHashKey;
    }

    /**
     * Unsets Ticket Hash Key.
     * Ticket Hash Key
     */
    public function unsetTicketHashKey(): void
    {
        $this->ticketHashKey = [];
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['id']                                    = $this->id;
        $json['created_ts']                            = $this->createdTs;
        $json['modified_ts']                           = $this->modifiedTs;
        if (!empty($this->accountNumber)) {
            $json['account_number']                    = $this->accountNumber['value'];
        }
        if (isset($this->address)) {
            $json['address']                           = $this->address;
        }
        if (!empty($this->brandingDomainId)) {
            $json['branding_domain_id']                = $this->brandingDomainId['value'];
        }
        if (isset($this->contactEmailTrxReceiptDefault)) {
            $json['contact_email_trx_receipt_default'] = $this->contactEmailTrxReceiptDefault;
        }
        if (!empty($this->defaultAch)) {
            $json['default_ach']                       = $this->defaultAch['value'];
        }
        if (!empty($this->defaultCc)) {
            $json['default_cc']                        = $this->defaultCc['value'];
        }
        if (!empty($this->emailReplyTo)) {
            $json['email_reply_to']                    = $this->emailReplyTo['value'];
        }
        if (!empty($this->fax)) {
            $json['fax']                               = $this->fax['value'];
        }
        if (!empty($this->locationApiId)) {
            $json['location_api_id']                   = $this->locationApiId['value'];
        }
        if (!empty($this->locationApiKey)) {
            $json['location_api_key']                  = $this->locationApiKey['value'];
        }
        if (!empty($this->locationC1)) {
            $json['location_c1']                       = $this->locationC1['value'];
        }
        if (!empty($this->locationC2)) {
            $json['location_c2']                       = $this->locationC2['value'];
        }
        if (!empty($this->locationC3)) {
            $json['location_c3']                       = $this->locationC3['value'];
        }
        $json['name']                                  = $this->name;
        if (!empty($this->officePhone)) {
            $json['office_phone']                      = $this->officePhone['value'];
        }
        if (!empty($this->officeExtPhone)) {
            $json['office_ext_phone']                  = $this->officeExtPhone['value'];
        }
        if (!empty($this->tz)) {
            $json['tz']                                = $this->tz['value'];
        }
        $json['parent_id']                             = $this->parentId;
        if (isset($this->showContactNotes)) {
            $json['show_contact_notes']                = $this->showContactNotes;
        }
        if (isset($this->showContactFiles)) {
            $json['show_contact_files']                = $this->showContactFiles;
        }
        if (!empty($this->ticketHashKey)) {
            $json['ticket_hash_key']                   = $this->ticketHashKey['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
