<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

/**
 * Log Sms Information on `expand`
 */
class LogSms implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var array
     */
    private $body = [];

    /**
     * @var string
     */
    private $reasonModel;

    /**
     * @var string
     */
    private $reasonModelId;

    /**
     * @var string
     */
    private $providerId;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $sender;

    /**
     * @var string
     */
    private $recipient;

    /**
     * @var int
     */
    private $createdTs;

    /**
     * @var string
     */
    private $createdUserId;

    /**
     * @param string $id
     * @param string $reasonModel
     * @param string $reasonModelId
     * @param string $providerId
     * @param string $status
     * @param string $sender
     * @param string $recipient
     * @param int $createdTs
     * @param string $createdUserId
     */
    public function __construct(
        string $id,
        string $reasonModel,
        string $reasonModelId,
        string $providerId,
        string $status,
        string $sender,
        string $recipient,
        int $createdTs,
        string $createdUserId
    ) {
        $this->id = $id;
        $this->reasonModel = $reasonModel;
        $this->reasonModelId = $reasonModelId;
        $this->providerId = $providerId;
        $this->status = $status;
        $this->sender = $sender;
        $this->recipient = $recipient;
        $this->createdTs = $createdTs;
        $this->createdUserId = $createdUserId;
    }

    /**
     * Returns Id.
     * Log Sms Id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * Log Sms Id
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Body.
     * Body
     */
    public function getBody(): ?string
    {
        if (count($this->body) == 0) {
            return null;
        }
        return $this->body['value'];
    }

    /**
     * Sets Body.
     * Body
     *
     * @maps body
     */
    public function setBody(?string $body): void
    {
        $this->body['value'] = $body;
    }

    /**
     * Unsets Body.
     * Body
     */
    public function unsetBody(): void
    {
        $this->body = [];
    }

    /**
     * Returns Reason Model.
     * Reason Model
     */
    public function getReasonModel(): string
    {
        return $this->reasonModel;
    }

    /**
     * Sets Reason Model.
     * Reason Model
     *
     * @required
     * @maps reason_model
     */
    public function setReasonModel(string $reasonModel): void
    {
        $this->reasonModel = $reasonModel;
    }

    /**
     * Returns Reason Model Id.
     * Reason Model ID
     */
    public function getReasonModelId(): string
    {
        return $this->reasonModelId;
    }

    /**
     * Sets Reason Model Id.
     * Reason Model ID
     *
     * @required
     * @maps reason_model_id
     */
    public function setReasonModelId(string $reasonModelId): void
    {
        $this->reasonModelId = $reasonModelId;
    }

    /**
     * Returns Provider Id.
     * Provider ID
     */
    public function getProviderId(): string
    {
        return $this->providerId;
    }

    /**
     * Sets Provider Id.
     * Provider ID
     *
     * @required
     * @maps provider_id
     */
    public function setProviderId(string $providerId): void
    {
        $this->providerId = $providerId;
    }

    /**
     * Returns Status.
     * Status
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * Status
     *
     * @required
     * @maps status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Sender.
     * Sender
     */
    public function getSender(): string
    {
        return $this->sender;
    }

    /**
     * Sets Sender.
     * Sender
     *
     * @required
     * @maps sender
     */
    public function setSender(string $sender): void
    {
        $this->sender = $sender;
    }

    /**
     * Returns Recipient.
     * Recipient
     */
    public function getRecipient(): string
    {
        return $this->recipient;
    }

    /**
     * Sets Recipient.
     * Recipient
     *
     * @required
     * @maps recipient
     */
    public function setRecipient(string $recipient): void
    {
        $this->recipient = $recipient;
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
     * Returns Created User Id.
     * User ID Created the register
     */
    public function getCreatedUserId(): string
    {
        return $this->createdUserId;
    }

    /**
     * Sets Created User Id.
     * User ID Created the register
     *
     * @required
     * @maps created_user_id
     */
    public function setCreatedUserId(string $createdUserId): void
    {
        $this->createdUserId = $createdUserId;
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
        $json['id']              = $this->id;
        if (!empty($this->body)) {
            $json['body']        = $this->body['value'];
        }
        $json['reason_model']    = $this->reasonModel;
        $json['reason_model_id'] = $this->reasonModelId;
        $json['provider_id']     = $this->providerId;
        $json['status']          = $this->status;
        $json['sender']          = $this->sender;
        $json['recipient']       = $this->recipient;
        $json['created_ts']      = $this->createdTs;
        $json['created_user_id'] = $this->createdUserId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
