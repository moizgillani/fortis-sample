<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class List14 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $hash;

    /**
     * @var int
     */
    private $createdTs;

    /**
     * @param string $id
     * @param string $userId
     * @param string $hash
     * @param int $createdTs
     */
    public function __construct(string $id, string $userId, string $hash, int $createdTs)
    {
        $this->id = $id;
        $this->userId = $userId;
        $this->hash = $hash;
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Id.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @required
     * @maps id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns User Id.
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * Sets User Id.
     *
     * @required
     * @maps user_id
     */
    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * Returns Hash.
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * Sets Hash.
     *
     * @required
     * @maps hash
     */
    public function setHash(string $hash): void
    {
        $this->hash = $hash;
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
        $json['id']         = $this->id;
        $json['user_id']    = $this->userId;
        $json['hash']       = $this->hash;
        $json['created_ts'] = $this->createdTs;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
