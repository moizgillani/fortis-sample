<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use FortisAPILib\ApiHelper;
use stdClass;

/**
 * You can use any `field_name` from this endpoint results as a filter, and you can also use more than
 * one field to create AND conditions. For date fields (ended with `_ts`), you can also search for
 * ranges using the `$gte` (Greater than or equal to) and/or  `$lte` (Lower than or equal to). You can
 * use one of the following methods:
 * >/endpoint?filter={ "field_name": "Value" }
 * >
 * >/endpoint?filter[field_name]=Value
 * >
 * >/endpoint?filter={ "created_ts": "today" }
 * >
 * >/endpoint?filter[created_ts]=today
 * >
 * >/endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }
 * >
 * >/endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today
 * >
 * >/endpoint?filter[address][city]=memphis
 * >
 * >/endpoint?filter={ "address": { "city" : "memphis" } }
 * >
 */
class Filter5 implements \JsonSerializable
{
    /**
     * @var array|null
     */
    private $locationId;

    /**
     * @var array|null
     */
    private $ccProductTransactionId;

    /**
     * @var array|null
     */
    private $email;

    /**
     * @var array|null
     */
    private $amountDue;

    /**
     * @var array|null
     */
    private $locationApiId;

    /**
     * @var array|null
     */
    private $contactId;

    /**
     * @var array|null
     */
    private $contactApiId;

    /**
     * @var array|null
     */
    private $paylinkApiId;

    /**
     * @var array|null
     */
    private $achProductTransactionId;

    /**
     * @var array|null
     */
    private $expireDate;

    /**
     * @var array|null
     */
    private $displayProductTransactionReceiptDetails;

    /**
     * @var array|null
     */
    private $displayBillingFields;

    /**
     * @var array|null
     */
    private $deliveryMethod;

    /**
     * @var array|null
     */
    private $cellPhone;

    /**
     * @var array|null
     */
    private $description;

    /**
     * @var array|null
     */
    private $storeToken;

    /**
     * @var array|null
     */
    private $storeTokenTitle;

    /**
     * @var array|null
     */
    private $paylinkAction;

    /**
     * @var array|null
     */
    private $bankFundedOnlyOverride;

    /**
     * @var array|null
     */
    private $tags;

    /**
     * @var array|null
     */
    private $id;

    /**
     * @var array|null
     */
    private $statusId;

    /**
     * @var array|null
     */
    private $statusCode;

    /**
     * @var array|null
     */
    private $active;

    /**
     * @var string|null|CreatedTs1
     */
    private $createdTs;

    /**
     * @var string|null|ModifiedTs1
     */
    private $modifiedTs;

    /**
     * @var array|null
     */
    private $createdUserId;

    /**
     * @var array|null
     */
    private $modifiedUserId;

    /**
     * Returns Location Id.
     */
    public function getLocationId(): ?array
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     *
     * @maps location_id
     */
    public function setLocationId(?array $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Cc Product Transaction Id.
     */
    public function getCcProductTransactionId(): ?array
    {
        return $this->ccProductTransactionId;
    }

    /**
     * Sets Cc Product Transaction Id.
     *
     * @maps cc_product_transaction_id
     */
    public function setCcProductTransactionId(?array $ccProductTransactionId): void
    {
        $this->ccProductTransactionId = $ccProductTransactionId;
    }

    /**
     * Returns Email.
     */
    public function getEmail(): ?array
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @maps email
     */
    public function setEmail(?array $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Amount Due.
     */
    public function getAmountDue(): ?array
    {
        return $this->amountDue;
    }

    /**
     * Sets Amount Due.
     *
     * @maps amount_due
     */
    public function setAmountDue(?array $amountDue): void
    {
        $this->amountDue = $amountDue;
    }

    /**
     * Returns Location Api Id.
     */
    public function getLocationApiId(): ?array
    {
        return $this->locationApiId;
    }

    /**
     * Sets Location Api Id.
     *
     * @maps location_api_id
     */
    public function setLocationApiId(?array $locationApiId): void
    {
        $this->locationApiId = $locationApiId;
    }

    /**
     * Returns Contact Id.
     */
    public function getContactId(): ?array
    {
        return $this->contactId;
    }

    /**
     * Sets Contact Id.
     *
     * @maps contact_id
     */
    public function setContactId(?array $contactId): void
    {
        $this->contactId = $contactId;
    }

    /**
     * Returns Contact Api Id.
     */
    public function getContactApiId(): ?array
    {
        return $this->contactApiId;
    }

    /**
     * Sets Contact Api Id.
     *
     * @maps contact_api_id
     */
    public function setContactApiId(?array $contactApiId): void
    {
        $this->contactApiId = $contactApiId;
    }

    /**
     * Returns Paylink Api Id.
     */
    public function getPaylinkApiId(): ?array
    {
        return $this->paylinkApiId;
    }

    /**
     * Sets Paylink Api Id.
     *
     * @maps paylink_api_id
     */
    public function setPaylinkApiId(?array $paylinkApiId): void
    {
        $this->paylinkApiId = $paylinkApiId;
    }

    /**
     * Returns Ach Product Transaction Id.
     */
    public function getAchProductTransactionId(): ?array
    {
        return $this->achProductTransactionId;
    }

    /**
     * Sets Ach Product Transaction Id.
     *
     * @maps ach_product_transaction_id
     */
    public function setAchProductTransactionId(?array $achProductTransactionId): void
    {
        $this->achProductTransactionId = $achProductTransactionId;
    }

    /**
     * Returns Expire Date.
     */
    public function getExpireDate(): ?array
    {
        return $this->expireDate;
    }

    /**
     * Sets Expire Date.
     *
     * @maps expire_date
     */
    public function setExpireDate(?array $expireDate): void
    {
        $this->expireDate = $expireDate;
    }

    /**
     * Returns Display Product Transaction Receipt Details.
     */
    public function getDisplayProductTransactionReceiptDetails(): ?array
    {
        return $this->displayProductTransactionReceiptDetails;
    }

    /**
     * Sets Display Product Transaction Receipt Details.
     *
     * @maps display_product_transaction_receipt_details
     */
    public function setDisplayProductTransactionReceiptDetails(?array $displayProductTransactionReceiptDetails): void
    {
        $this->displayProductTransactionReceiptDetails = $displayProductTransactionReceiptDetails;
    }

    /**
     * Returns Display Billing Fields.
     */
    public function getDisplayBillingFields(): ?array
    {
        return $this->displayBillingFields;
    }

    /**
     * Sets Display Billing Fields.
     *
     * @maps display_billing_fields
     */
    public function setDisplayBillingFields(?array $displayBillingFields): void
    {
        $this->displayBillingFields = $displayBillingFields;
    }

    /**
     * Returns Delivery Method.
     */
    public function getDeliveryMethod(): ?array
    {
        return $this->deliveryMethod;
    }

    /**
     * Sets Delivery Method.
     *
     * @maps delivery_method
     */
    public function setDeliveryMethod(?array $deliveryMethod): void
    {
        $this->deliveryMethod = $deliveryMethod;
    }

    /**
     * Returns Cell Phone.
     */
    public function getCellPhone(): ?array
    {
        return $this->cellPhone;
    }

    /**
     * Sets Cell Phone.
     *
     * @maps cell_phone
     */
    public function setCellPhone(?array $cellPhone): void
    {
        $this->cellPhone = $cellPhone;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?array
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?array $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Store Token.
     */
    public function getStoreToken(): ?array
    {
        return $this->storeToken;
    }

    /**
     * Sets Store Token.
     *
     * @maps store_token
     */
    public function setStoreToken(?array $storeToken): void
    {
        $this->storeToken = $storeToken;
    }

    /**
     * Returns Store Token Title.
     */
    public function getStoreTokenTitle(): ?array
    {
        return $this->storeTokenTitle;
    }

    /**
     * Sets Store Token Title.
     *
     * @maps store_token_title
     */
    public function setStoreTokenTitle(?array $storeTokenTitle): void
    {
        $this->storeTokenTitle = $storeTokenTitle;
    }

    /**
     * Returns Paylink Action.
     */
    public function getPaylinkAction(): ?array
    {
        return $this->paylinkAction;
    }

    /**
     * Sets Paylink Action.
     *
     * @maps paylink_action
     */
    public function setPaylinkAction(?array $paylinkAction): void
    {
        $this->paylinkAction = $paylinkAction;
    }

    /**
     * Returns Bank Funded Only Override.
     */
    public function getBankFundedOnlyOverride(): ?array
    {
        return $this->bankFundedOnlyOverride;
    }

    /**
     * Sets Bank Funded Only Override.
     *
     * @maps bank_funded_only_override
     */
    public function setBankFundedOnlyOverride(?array $bankFundedOnlyOverride): void
    {
        $this->bankFundedOnlyOverride = $bankFundedOnlyOverride;
    }

    /**
     * Returns Tags.
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * Sets Tags.
     *
     * @maps tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * Returns Id.
     */
    public function getId(): ?array
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?array $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Status Id.
     */
    public function getStatusId(): ?array
    {
        return $this->statusId;
    }

    /**
     * Sets Status Id.
     *
     * @maps status_id
     */
    public function setStatusId(?array $statusId): void
    {
        $this->statusId = $statusId;
    }

    /**
     * Returns Status Code.
     */
    public function getStatusCode(): ?array
    {
        return $this->statusCode;
    }

    /**
     * Sets Status Code.
     *
     * @maps status_code
     */
    public function setStatusCode(?array $statusCode): void
    {
        $this->statusCode = $statusCode;
    }

    /**
     * Returns Active.
     */
    public function getActive(): ?array
    {
        return $this->active;
    }

    /**
     * Sets Active.
     *
     * @maps active
     */
    public function setActive(?array $active): void
    {
        $this->active = $active;
    }

    /**
     * Returns Created Ts.
     *
     * @return string|null|CreatedTs1
     */
    public function getCreatedTs()
    {
        return $this->createdTs;
    }

    /**
     * Sets Created Ts.
     *
     * @maps created_ts
     * @mapsBy anyOf(anyOf(CreatedTsEnum,CreatedTs1),null)
     * @factory \FortisAPILib\Models\CreatedTsEnum::checkValue CreatedTsEnum
     *
     * @param string|null|CreatedTs1 $createdTs
     */
    public function setCreatedTs($createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Modified Ts.
     *
     * @return string|null|ModifiedTs1
     */
    public function getModifiedTs()
    {
        return $this->modifiedTs;
    }

    /**
     * Sets Modified Ts.
     *
     * @maps modified_ts
     * @mapsBy anyOf(anyOf(ModifiedTsEnum,ModifiedTs1),null)
     * @factory \FortisAPILib\Models\ModifiedTsEnum::checkValue ModifiedTsEnum
     *
     * @param string|null|ModifiedTs1 $modifiedTs
     */
    public function setModifiedTs($modifiedTs): void
    {
        $this->modifiedTs = $modifiedTs;
    }

    /**
     * Returns Created User Id.
     */
    public function getCreatedUserId(): ?array
    {
        return $this->createdUserId;
    }

    /**
     * Sets Created User Id.
     *
     * @maps created_user_id
     */
    public function setCreatedUserId(?array $createdUserId): void
    {
        $this->createdUserId = $createdUserId;
    }

    /**
     * Returns Modified User Id.
     */
    public function getModifiedUserId(): ?array
    {
        return $this->modifiedUserId;
    }

    /**
     * Sets Modified User Id.
     *
     * @maps modified_user_id
     */
    public function setModifiedUserId(?array $modifiedUserId): void
    {
        $this->modifiedUserId = $modifiedUserId;
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
        if (isset($this->locationId)) {
            $json['location_id']                                 = $this->locationId;
        }
        if (isset($this->ccProductTransactionId)) {
            $json['cc_product_transaction_id']                   = $this->ccProductTransactionId;
        }
        if (isset($this->email)) {
            $json['email']                                       = $this->email;
        }
        if (isset($this->amountDue)) {
            $json['amount_due']                                  = $this->amountDue;
        }
        if (isset($this->locationApiId)) {
            $json['location_api_id']                             = $this->locationApiId;
        }
        if (isset($this->contactId)) {
            $json['contact_id']                                  = $this->contactId;
        }
        if (isset($this->contactApiId)) {
            $json['contact_api_id']                              = $this->contactApiId;
        }
        if (isset($this->paylinkApiId)) {
            $json['paylink_api_id']                              = $this->paylinkApiId;
        }
        if (isset($this->achProductTransactionId)) {
            $json['ach_product_transaction_id']                  = $this->achProductTransactionId;
        }
        if (isset($this->expireDate)) {
            $json['expire_date']                                 = $this->expireDate;
        }
        if (isset($this->displayProductTransactionReceiptDetails)) {
            $json['display_product_transaction_receipt_details'] = $this->displayProductTransactionReceiptDetails;
        }
        if (isset($this->displayBillingFields)) {
            $json['display_billing_fields']                      = $this->displayBillingFields;
        }
        if (isset($this->deliveryMethod)) {
            $json['delivery_method']                             = $this->deliveryMethod;
        }
        if (isset($this->cellPhone)) {
            $json['cell_phone']                                  = $this->cellPhone;
        }
        if (isset($this->description)) {
            $json['description']                                 = $this->description;
        }
        if (isset($this->storeToken)) {
            $json['store_token']                                 = $this->storeToken;
        }
        if (isset($this->storeTokenTitle)) {
            $json['store_token_title']                           = $this->storeTokenTitle;
        }
        if (isset($this->paylinkAction)) {
            $json['paylink_action']                              = $this->paylinkAction;
        }
        if (isset($this->bankFundedOnlyOverride)) {
            $json['bank_funded_only_override']                   = $this->bankFundedOnlyOverride;
        }
        if (isset($this->tags)) {
            $json['tags']                                        = $this->tags;
        }
        if (isset($this->id)) {
            $json['id']                                          = $this->id;
        }
        if (isset($this->statusId)) {
            $json['status_id']                                   = $this->statusId;
        }
        if (isset($this->statusCode)) {
            $json['status_code']                                 = $this->statusCode;
        }
        if (isset($this->active)) {
            $json['active']                                      = $this->active;
        }
        if (isset($this->createdTs)) {
            $json['created_ts']                                  =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->createdTs,
                    'anyOf(anyOf(CreatedTsEnum,CreatedTs1),null)',
                    [
                        '\FortisAPILib\Models\CreatedTsEnum::checkValue CreatedTsEnum'
                    ]
                );
        }
        if (isset($this->modifiedTs)) {
            $json['modified_ts']                                 =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->modifiedTs,
                    'anyOf(anyOf(ModifiedTsEnum,ModifiedTs1),null)',
                    [
                        '\FortisAPILib\Models\ModifiedTsEnum::checkValue ModifiedTsEnum'
                    ]
                );
        }
        if (isset($this->createdUserId)) {
            $json['created_user_id']                             = $this->createdUserId;
        }
        if (isset($this->modifiedUserId)) {
            $json['modified_user_id']                            = $this->modifiedUserId;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
