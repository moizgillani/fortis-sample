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
 * You can use any `field_name` from this endpoint results, and you can combine more than one field for
 * more complex sorting. You can use one of the following methods:
 * >/endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
 * >
 * >/endpoint?sort[field_name]=asc&sort[field_name2]=desc
 * >
 */
class Sort16 implements \JsonSerializable
{
    /**
     * @var array|null
     */
    private $id;

    /**
     * @var array|null
     */
    private $createdTs;

    /**
     * @var array|null
     */
    private $productTransactionId;

    /**
     * @var array|null
     */
    private $processingStatusId;

    /**
     * @var array|null
     */
    private $batchNum;

    /**
     * @var array|null
     */
    private $isOpen;

    /**
     * @var array|null
     */
    private $settlementFileName;

    /**
     * @var array|null
     */
    private $batchCloseTs;

    /**
     * @var array|null
     */
    private $batchCloseDetail;

    /**
     * @var array|null
     */
    private $totalSaleAmount;

    /**
     * @var array|null
     */
    private $totalSaleCount;

    /**
     * @var array|null
     */
    private $totalRefundAmount;

    /**
     * @var array|null
     */
    private $totalRefundCount;

    /**
     * @var array|null
     */
    private $totalVoidAmount;

    /**
     * @var array|null
     */
    private $totalVoidCount;

    /**
     * @var array|null
     */
    private $changelogs;

    /**
     * @var array|null
     */
    private $postbackLogs;

    /**
     * @var array|null
     */
    private $productTransaction;

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
     */
    public function getCreatedTs(): ?array
    {
        return $this->createdTs;
    }

    /**
     * Sets Created Ts.
     *
     * @maps created_ts
     */
    public function setCreatedTs(?array $createdTs): void
    {
        $this->createdTs = $createdTs;
    }

    /**
     * Returns Product Transaction Id.
     */
    public function getProductTransactionId(): ?array
    {
        return $this->productTransactionId;
    }

    /**
     * Sets Product Transaction Id.
     *
     * @maps product_transaction_id
     */
    public function setProductTransactionId(?array $productTransactionId): void
    {
        $this->productTransactionId = $productTransactionId;
    }

    /**
     * Returns Processing Status Id.
     */
    public function getProcessingStatusId(): ?array
    {
        return $this->processingStatusId;
    }

    /**
     * Sets Processing Status Id.
     *
     * @maps processing_status_id
     */
    public function setProcessingStatusId(?array $processingStatusId): void
    {
        $this->processingStatusId = $processingStatusId;
    }

    /**
     * Returns Batch Num.
     */
    public function getBatchNum(): ?array
    {
        return $this->batchNum;
    }

    /**
     * Sets Batch Num.
     *
     * @maps batch_num
     */
    public function setBatchNum(?array $batchNum): void
    {
        $this->batchNum = $batchNum;
    }

    /**
     * Returns Is Open.
     */
    public function getIsOpen(): ?array
    {
        return $this->isOpen;
    }

    /**
     * Sets Is Open.
     *
     * @maps is_open
     */
    public function setIsOpen(?array $isOpen): void
    {
        $this->isOpen = $isOpen;
    }

    /**
     * Returns Settlement File Name.
     */
    public function getSettlementFileName(): ?array
    {
        return $this->settlementFileName;
    }

    /**
     * Sets Settlement File Name.
     *
     * @maps settlement_file_name
     */
    public function setSettlementFileName(?array $settlementFileName): void
    {
        $this->settlementFileName = $settlementFileName;
    }

    /**
     * Returns Batch Close Ts.
     */
    public function getBatchCloseTs(): ?array
    {
        return $this->batchCloseTs;
    }

    /**
     * Sets Batch Close Ts.
     *
     * @maps batch_close_ts
     */
    public function setBatchCloseTs(?array $batchCloseTs): void
    {
        $this->batchCloseTs = $batchCloseTs;
    }

    /**
     * Returns Batch Close Detail.
     */
    public function getBatchCloseDetail(): ?array
    {
        return $this->batchCloseDetail;
    }

    /**
     * Sets Batch Close Detail.
     *
     * @maps batch_close_detail
     */
    public function setBatchCloseDetail(?array $batchCloseDetail): void
    {
        $this->batchCloseDetail = $batchCloseDetail;
    }

    /**
     * Returns Total Sale Amount.
     */
    public function getTotalSaleAmount(): ?array
    {
        return $this->totalSaleAmount;
    }

    /**
     * Sets Total Sale Amount.
     *
     * @maps total_sale_amount
     */
    public function setTotalSaleAmount(?array $totalSaleAmount): void
    {
        $this->totalSaleAmount = $totalSaleAmount;
    }

    /**
     * Returns Total Sale Count.
     */
    public function getTotalSaleCount(): ?array
    {
        return $this->totalSaleCount;
    }

    /**
     * Sets Total Sale Count.
     *
     * @maps total_sale_count
     */
    public function setTotalSaleCount(?array $totalSaleCount): void
    {
        $this->totalSaleCount = $totalSaleCount;
    }

    /**
     * Returns Total Refund Amount.
     */
    public function getTotalRefundAmount(): ?array
    {
        return $this->totalRefundAmount;
    }

    /**
     * Sets Total Refund Amount.
     *
     * @maps total_refund_amount
     */
    public function setTotalRefundAmount(?array $totalRefundAmount): void
    {
        $this->totalRefundAmount = $totalRefundAmount;
    }

    /**
     * Returns Total Refund Count.
     */
    public function getTotalRefundCount(): ?array
    {
        return $this->totalRefundCount;
    }

    /**
     * Sets Total Refund Count.
     *
     * @maps total_refund_count
     */
    public function setTotalRefundCount(?array $totalRefundCount): void
    {
        $this->totalRefundCount = $totalRefundCount;
    }

    /**
     * Returns Total Void Amount.
     */
    public function getTotalVoidAmount(): ?array
    {
        return $this->totalVoidAmount;
    }

    /**
     * Sets Total Void Amount.
     *
     * @maps total_void_amount
     */
    public function setTotalVoidAmount(?array $totalVoidAmount): void
    {
        $this->totalVoidAmount = $totalVoidAmount;
    }

    /**
     * Returns Total Void Count.
     */
    public function getTotalVoidCount(): ?array
    {
        return $this->totalVoidCount;
    }

    /**
     * Sets Total Void Count.
     *
     * @maps total_void_count
     */
    public function setTotalVoidCount(?array $totalVoidCount): void
    {
        $this->totalVoidCount = $totalVoidCount;
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
     * Returns Postback Logs.
     */
    public function getPostbackLogs(): ?array
    {
        return $this->postbackLogs;
    }

    /**
     * Sets Postback Logs.
     *
     * @maps postback_logs
     */
    public function setPostbackLogs(?array $postbackLogs): void
    {
        $this->postbackLogs = $postbackLogs;
    }

    /**
     * Returns Product Transaction.
     */
    public function getProductTransaction(): ?array
    {
        return $this->productTransaction;
    }

    /**
     * Sets Product Transaction.
     *
     * @maps product_transaction
     */
    public function setProductTransaction(?array $productTransaction): void
    {
        $this->productTransaction = $productTransaction;
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
        if (isset($this->id)) {
            $json['id']                     = $this->id;
        }
        if (isset($this->createdTs)) {
            $json['created_ts']             = $this->createdTs;
        }
        if (isset($this->productTransactionId)) {
            $json['product_transaction_id'] = $this->productTransactionId;
        }
        if (isset($this->processingStatusId)) {
            $json['processing_status_id']   = $this->processingStatusId;
        }
        if (isset($this->batchNum)) {
            $json['batch_num']              = $this->batchNum;
        }
        if (isset($this->isOpen)) {
            $json['is_open']                = $this->isOpen;
        }
        if (isset($this->settlementFileName)) {
            $json['settlement_file_name']   = $this->settlementFileName;
        }
        if (isset($this->batchCloseTs)) {
            $json['batch_close_ts']         = $this->batchCloseTs;
        }
        if (isset($this->batchCloseDetail)) {
            $json['batch_close_detail']     = $this->batchCloseDetail;
        }
        if (isset($this->totalSaleAmount)) {
            $json['total_sale_amount']      = $this->totalSaleAmount;
        }
        if (isset($this->totalSaleCount)) {
            $json['total_sale_count']       = $this->totalSaleCount;
        }
        if (isset($this->totalRefundAmount)) {
            $json['total_refund_amount']    = $this->totalRefundAmount;
        }
        if (isset($this->totalRefundCount)) {
            $json['total_refund_count']     = $this->totalRefundCount;
        }
        if (isset($this->totalVoidAmount)) {
            $json['total_void_amount']      = $this->totalVoidAmount;
        }
        if (isset($this->totalVoidCount)) {
            $json['total_void_count']       = $this->totalVoidCount;
        }
        if (isset($this->changelogs)) {
            $json['changelogs']             = $this->changelogs;
        }
        if (isset($this->postbackLogs)) {
            $json['postback_logs']          = $this->postbackLogs;
        }
        if (isset($this->productTransaction)) {
            $json['product_transaction']    = $this->productTransaction;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
