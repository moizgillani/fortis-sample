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
class Filter2 implements \JsonSerializable
{
    /**
     * @var array|null
     */
    private $locationId;

    /**
     * @var array|null
     */
    private $terminalId;

    /**
     * @var array|null
     */
    private $requireSignature;

    /**
     * @var array|null
     */
    private $deviceTermApiId;

    /**
     * @var array|null
     */
    private $termsConditions;

    /**
     * @var array|null
     */
    private $id;

    /**
     * @var array|null
     */
    private $reasonCodeId;

    /**
     * @var array|null
     */
    private $signature;

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
    private $createdUser;

    /**
     * @var array|null
     */
    private $location;

    /**
     * @var array|null
     */
    private $terminal;

    /**
     * @var array|null
     */
    private $changelogs;

    /**
     * @var array|null
     */
    private $reasonCode;

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
     * Returns Terminal Id.
     */
    public function getTerminalId(): ?array
    {
        return $this->terminalId;
    }

    /**
     * Sets Terminal Id.
     *
     * @maps terminal_id
     */
    public function setTerminalId(?array $terminalId): void
    {
        $this->terminalId = $terminalId;
    }

    /**
     * Returns Require Signature.
     */
    public function getRequireSignature(): ?array
    {
        return $this->requireSignature;
    }

    /**
     * Sets Require Signature.
     *
     * @maps require_signature
     */
    public function setRequireSignature(?array $requireSignature): void
    {
        $this->requireSignature = $requireSignature;
    }

    /**
     * Returns Device Term Api Id.
     */
    public function getDeviceTermApiId(): ?array
    {
        return $this->deviceTermApiId;
    }

    /**
     * Sets Device Term Api Id.
     *
     * @maps device_term_api_id
     */
    public function setDeviceTermApiId(?array $deviceTermApiId): void
    {
        $this->deviceTermApiId = $deviceTermApiId;
    }

    /**
     * Returns Terms Conditions.
     */
    public function getTermsConditions(): ?array
    {
        return $this->termsConditions;
    }

    /**
     * Sets Terms Conditions.
     *
     * @maps terms_conditions
     */
    public function setTermsConditions(?array $termsConditions): void
    {
        $this->termsConditions = $termsConditions;
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
     * Returns Reason Code Id.
     */
    public function getReasonCodeId(): ?array
    {
        return $this->reasonCodeId;
    }

    /**
     * Sets Reason Code Id.
     *
     * @maps reason_code_id
     */
    public function setReasonCodeId(?array $reasonCodeId): void
    {
        $this->reasonCodeId = $reasonCodeId;
    }

    /**
     * Returns Signature.
     */
    public function getSignature(): ?array
    {
        return $this->signature;
    }

    /**
     * Sets Signature.
     *
     * @maps signature
     */
    public function setSignature(?array $signature): void
    {
        $this->signature = $signature;
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
     * Returns Created User.
     */
    public function getCreatedUser(): ?array
    {
        return $this->createdUser;
    }

    /**
     * Sets Created User.
     *
     * @maps created_user
     */
    public function setCreatedUser(?array $createdUser): void
    {
        $this->createdUser = $createdUser;
    }

    /**
     * Returns Location.
     */
    public function getLocation(): ?array
    {
        return $this->location;
    }

    /**
     * Sets Location.
     *
     * @maps location
     */
    public function setLocation(?array $location): void
    {
        $this->location = $location;
    }

    /**
     * Returns Terminal.
     */
    public function getTerminal(): ?array
    {
        return $this->terminal;
    }

    /**
     * Sets Terminal.
     *
     * @maps terminal
     */
    public function setTerminal(?array $terminal): void
    {
        $this->terminal = $terminal;
    }

    /**
     * Returns Changelogs.
     */
    public function getChangelogs(): ?array
    {
        return $this->changelogs;
    }

    /**
     * Sets Changelogs.
     *
     * @maps changelogs
     */
    public function setChangelogs(?array $changelogs): void
    {
        $this->changelogs = $changelogs;
    }

    /**
     * Returns Reason Code.
     */
    public function getReasonCode(): ?array
    {
        return $this->reasonCode;
    }

    /**
     * Sets Reason Code.
     *
     * @maps reason_code
     */
    public function setReasonCode(?array $reasonCode): void
    {
        $this->reasonCode = $reasonCode;
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
            $json['location_id']        = $this->locationId;
        }
        if (isset($this->terminalId)) {
            $json['terminal_id']        = $this->terminalId;
        }
        if (isset($this->requireSignature)) {
            $json['require_signature']  = $this->requireSignature;
        }
        if (isset($this->deviceTermApiId)) {
            $json['device_term_api_id'] = $this->deviceTermApiId;
        }
        if (isset($this->termsConditions)) {
            $json['terms_conditions']   = $this->termsConditions;
        }
        if (isset($this->id)) {
            $json['id']                 = $this->id;
        }
        if (isset($this->reasonCodeId)) {
            $json['reason_code_id']     = $this->reasonCodeId;
        }
        if (isset($this->signature)) {
            $json['signature']          = $this->signature;
        }
        if (isset($this->createdTs)) {
            $json['created_ts']         =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->createdTs,
                    'anyOf(anyOf(CreatedTsEnum,CreatedTs1),null)',
                    [
                        '\FortisAPILib\Models\CreatedTsEnum::checkValue CreatedTsEnum'
                    ]
                );
        }
        if (isset($this->modifiedTs)) {
            $json['modified_ts']        =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->modifiedTs,
                    'anyOf(anyOf(ModifiedTsEnum,ModifiedTs1),null)',
                    [
                        '\FortisAPILib\Models\ModifiedTsEnum::checkValue ModifiedTsEnum'
                    ]
                );
        }
        if (isset($this->createdUserId)) {
            $json['created_user_id']    = $this->createdUserId;
        }
        if (isset($this->createdUser)) {
            $json['created_user']       = $this->createdUser;
        }
        if (isset($this->location)) {
            $json['location']           = $this->location;
        }
        if (isset($this->terminal)) {
            $json['terminal']           = $this->terminal;
        }
        if (isset($this->changelogs)) {
            $json['changelogs']         = $this->changelogs;
        }
        if (isset($this->reasonCode)) {
            $json['reason_code']        = $this->reasonCode;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
