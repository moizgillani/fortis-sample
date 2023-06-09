<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class Settings implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $enabled;

    /**
     * @var float
     */
    private $columns;

    /**
     * @var float
     */
    private $rows;

    /**
     * @param bool $enabled
     * @param float $columns
     * @param float $rows
     */
    public function __construct(bool $enabled, float $columns, float $rows)
    {
        $this->enabled = $enabled;
        $this->columns = $columns;
        $this->rows = $rows;
    }

    /**
     * Returns Enabled.
     * Enabled
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * Enabled
     *
     * @required
     * @maps enabled
     */
    public function setEnabled(bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Columns.
     * Columns
     */
    public function getColumns(): float
    {
        return $this->columns;
    }

    /**
     * Sets Columns.
     * Columns
     *
     * @required
     * @maps columns
     */
    public function setColumns(float $columns): void
    {
        $this->columns = $columns;
    }

    /**
     * Returns Rows.
     * Rows
     */
    public function getRows(): float
    {
        return $this->rows;
    }

    /**
     * Sets Rows.
     * Rows
     *
     * @required
     * @maps rows
     */
    public function setRows(float $rows): void
    {
        $this->rows = $rows;
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
        $json['enabled'] = $this->enabled;
        $json['columns'] = $this->columns;
        $json['rows']    = $this->rows;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
