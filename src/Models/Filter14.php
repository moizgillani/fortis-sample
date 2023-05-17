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
class Filter14 implements \JsonSerializable
{
    /**
     * @var array|null
     */
    private $userId;

    /**
     * @var array|null
     */
    private $id;

    /**
     * @var string|null|CreatedTs1
     */
    private $createdTs;

    /**
     * Returns User Id.
     */
    public function getUserId(): ?array
    {
        return $this->userId;
    }

    /**
     * Sets User Id.
     *
     * @maps user_id
     */
    public function setUserId(?array $userId): void
    {
        $this->userId = $userId;
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
        if (isset($this->userId)) {
            $json['user_id']    = $this->userId;
        }
        if (isset($this->id)) {
            $json['id']         = $this->id;
        }
        if (isset($this->createdTs)) {
            $json['created_ts'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->createdTs,
                    'anyOf(anyOf(CreatedTsEnum,CreatedTs1),null)',
                    [
                        '\FortisAPILib\Models\CreatedTsEnum::checkValue CreatedTsEnum'
                    ]
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
