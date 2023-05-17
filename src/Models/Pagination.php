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
 * Pagination info
 */
class Pagination implements \JsonSerializable
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var int|null
     */
    private $totalCount;

    /**
     * @var int|null
     */
    private $pageCount;

    /**
     * @var int|null
     */
    private $pageNumber;

    /**
     * @var int|null
     */
    private $pageSize;

    /**
     * Returns Type.
     * Object type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Object type
     *
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Total Count.
     * Total records count
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * Sets Total Count.
     * Total records count
     *
     * @maps total_count
     */
    public function setTotalCount(?int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    /**
     * Returns Page Count.
     * Total page count
     */
    public function getPageCount(): ?int
    {
        return $this->pageCount;
    }

    /**
     * Sets Page Count.
     * Total page count
     *
     * @maps page_count
     */
    public function setPageCount(?int $pageCount): void
    {
        $this->pageCount = $pageCount;
    }

    /**
     * Returns Page Number.
     * Current page
     */
    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }

    /**
     * Sets Page Number.
     * Current page
     *
     * @maps page_number
     */
    public function setPageNumber(?int $pageNumber): void
    {
        $this->pageNumber = $pageNumber;
    }

    /**
     * Returns Page Size.
     * Page size
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * Sets Page Size.
     * Page size
     *
     * @maps page_size
     */
    public function setPageSize(?int $pageSize): void
    {
        $this->pageSize = $pageSize;
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
        $json['type']            = $this->type;
        if (isset($this->totalCount)) {
            $json['total_count'] = $this->totalCount;
        }
        if (isset($this->pageCount)) {
            $json['page_count']  = $this->pageCount;
        }
        if (isset($this->pageNumber)) {
            $json['page_number'] = $this->pageNumber;
        }
        if (isset($this->pageSize)) {
            $json['page_size']   = $this->pageSize;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
