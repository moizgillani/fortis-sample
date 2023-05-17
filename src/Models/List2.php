<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class List2 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $locationId;

    /**
     * @var string
     */
    private $terminalId;

    /**
     * @var bool
     */
    private $requireSignature;

    /**
     * @var array
     */
    private $deviceTermApiId = [];

    /**
     * @var string
     */
    private $termsConditions;

    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $reasonCodeId;

    /**
     * @var Signature|null
     */
    private $signature;

    /**
     * @var int
     */
    private $createdTs;

    /**
     * @var int
     */
    private $modifiedTs;

    /**
     * @var string
     */
    private $createdUserId;

    /**
     * @var CreatedUser|null
     */
    private $createdUser;

    /**
     * @var Location|null
     */
    private $location;

    /**
     * @var Terminal|null
     */
    private $terminal;

    /**
     * @var Changelog[]|null
     */
    private $changelogs;

    /**
     * @var ReasonCode|null
     */
    private $reasonCode;

    /**
     * @param string $locationId
     * @param string $terminalId
     * @param bool $requireSignature
     * @param string $termsConditions
     * @param string $id
     * @param int $reasonCodeId
     * @param int $createdTs
     * @param int $modifiedTs
     * @param string $createdUserId
     */
    public function __construct(
        string $locationId,
        string $terminalId,
        bool $requireSignature,
        string $termsConditions,
        string $id,
        int $reasonCodeId,
        int $createdTs,
        int $modifiedTs,
        string $createdUserId
    ) {
        $this->locationId = $locationId;
        $this->terminalId = $terminalId;
        $this->requireSignature = $requireSignature;
        $this->termsConditions = $termsConditions;
        $this->id = $id;
        $this->reasonCodeId = $reasonCodeId;
        $this->createdTs = $createdTs;
        $this->modifiedTs = $modifiedTs;
        $this->createdUserId = $createdUserId;
    }

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): string
    {
        return $this->locationId;
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @required
     * @maps location_id
     */
    public function setLocationId(string $locationId): void
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns Terminal Id.
     * Terminal ID
     */
    public function getTerminalId(): string
    {
        return $this->terminalId;
    }

    /**
     * Sets Terminal Id.
     * Terminal ID
     *
     * @required
     * @maps terminal_id
     */
    public function setTerminalId(string $terminalId): void
    {
        $this->terminalId = $terminalId;
    }

    /**
     * Returns Require Signature.
     * Set to true or 1 to require a signature from the customer
     */
    public function getRequireSignature(): bool
    {
        return $this->requireSignature;
    }

    /**
     * Sets Require Signature.
     * Set to true or 1 to require a signature from the customer
     *
     * @required
     * @maps require_signature
     */
    public function setRequireSignature(bool $requireSignature): void
    {
        $this->requireSignature = $requireSignature;
    }

    /**
     * Returns Device Term Api Id.
     * Can be used for associating record to external systems. Must be unique per location.
     */
    public function getDeviceTermApiId(): ?string
    {
        if (count($this->deviceTermApiId) == 0) {
            return null;
        }
        return $this->deviceTermApiId['value'];
    }

    /**
     * Sets Device Term Api Id.
     * Can be used for associating record to external systems. Must be unique per location.
     *
     * @maps device_term_api_id
     */
    public function setDeviceTermApiId(?string $deviceTermApiId): void
    {
        $this->deviceTermApiId['value'] = $deviceTermApiId;
    }

    /**
     * Unsets Device Term Api Id.
     * Can be used for associating record to external systems. Must be unique per location.
     */
    public function unsetDeviceTermApiId(): void
    {
        $this->deviceTermApiId = [];
    }

    /**
     * Returns Terms Conditions.
     * This is the message that is displayed on the screen when prompting for a signature.
     */
    public function getTermsConditions(): string
    {
        return $this->termsConditions;
    }

    /**
     * Sets Terms Conditions.
     * This is the message that is displayed on the screen when prompting for a signature.
     *
     * @required
     * @maps terms_conditions
     */
    public function setTermsConditions(string $termsConditions): void
    {
        $this->termsConditions = $termsConditions;
    }

    /**
     * Returns Id.
     * Device term ID
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Device term ID
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Reason Code Id.
     * Reason code ID
     */
    public function getReasonCodeId(): int
    {
        return $this->reasonCodeId;
    }

    /**
     * Sets Reason Code Id.
     * Reason code ID
     *
     * @required
     * @maps reason_code_id
     */
    public function setReasonCodeId(int $reasonCodeId): void
    {
        $this->reasonCodeId = $reasonCodeId;
    }

    /**
     * Returns Signature.
     * Signature Information on `expand`
     */
    public function getSignature(): ?Signature
    {
        return $this->signature;
    }

    /**
     * Sets Signature.
     * Signature Information on `expand`
     *
     * @maps signature
     */
    public function setSignature(?Signature $signature): void
    {
        $this->signature = $signature;
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
     * Returns Created User Id.
     * System generated id for user who created record
     */
    public function getCreatedUserId(): string
    {
        return $this->createdUserId;
    }

    /**
     * Sets Created User Id.
     * System generated id for user who created record
     *
     * @required
     * @maps created_user_id
     */
    public function setCreatedUserId(string $createdUserId): void
    {
        $this->createdUserId = $createdUserId;
    }

    /**
     * Returns Created User.
     * User Information on `expand`
     */
    public function getCreatedUser(): ?CreatedUser
    {
        return $this->createdUser;
    }

    /**
     * Sets Created User.
     * User Information on `expand`
     *
     * @maps created_user
     */
    public function setCreatedUser(?CreatedUser $createdUser): void
    {
        $this->createdUser = $createdUser;
    }

    /**
     * Returns Location.
     * Location Information on `expand`
     */
    public function getLocation(): ?Location
    {
        return $this->location;
    }

    /**
     * Sets Location.
     * Location Information on `expand`
     *
     * @maps location
     */
    public function setLocation(?Location $location): void
    {
        $this->location = $location;
    }

    /**
     * Returns Terminal.
     * Terminal Information on `expand`
     */
    public function getTerminal(): ?Terminal
    {
        return $this->terminal;
    }

    /**
     * Sets Terminal.
     * Terminal Information on `expand`
     *
     * @maps terminal
     */
    public function setTerminal(?Terminal $terminal): void
    {
        $this->terminal = $terminal;
    }

    /**
     * Returns Changelogs.
     * Changelog Information on `expand`
     *
     * @return Changelog[]|null
     */
    public function getChangelogs(): ?array
    {
        return $this->changelogs;
    }

    /**
     * Sets Changelogs.
     * Changelog Information on `expand`
     *
     * @maps changelogs
     *
     * @param Changelog[]|null $changelogs
     */
    public function setChangelogs(?array $changelogs): void
    {
        $this->changelogs = $changelogs;
    }

    /**
     * Returns Reason Code.
     * Reason Code Information on `expand`
     */
    public function getReasonCode(): ?ReasonCode
    {
        return $this->reasonCode;
    }

    /**
     * Sets Reason Code.
     * Reason Code Information on `expand`
     *
     * @maps reason_code
     */
    public function setReasonCode(?ReasonCode $reasonCode): void
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
        $json['location_id']            = $this->locationId;
        $json['terminal_id']            = $this->terminalId;
        $json['require_signature']      = $this->requireSignature;
        if (!empty($this->deviceTermApiId)) {
            $json['device_term_api_id'] = $this->deviceTermApiId['value'];
        }
        $json['terms_conditions']       = $this->termsConditions;
        $json['id']                     = $this->id;
        $json['reason_code_id']         = $this->reasonCodeId;
        if (isset($this->signature)) {
            $json['signature']          = $this->signature;
        }
        $json['created_ts']             = $this->createdTs;
        $json['modified_ts']            = $this->modifiedTs;
        $json['created_user_id']        = $this->createdUserId;
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
