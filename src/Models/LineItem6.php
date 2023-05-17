<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class LineItem6 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $commodityCode;

    /**
     * @var array
     */
    private $discountAmount = [];

    /**
     * @var array
     */
    private $otherTaxAmount = [];

    /**
     * @var string
     */
    private $productCode;

    /**
     * @var array
     */
    private $quantity = [];

    /**
     * @var array
     */
    private $taxAmount = [];

    /**
     * @var array
     */
    private $taxRate = [];

    /**
     * @var string
     */
    private $unitCode;

    /**
     * @var int
     */
    private $unitCost;

    /**
     * @param string $description
     * @param string $commodityCode
     * @param string $productCode
     * @param string $unitCode
     * @param int $unitCost
     */
    public function __construct(
        string $description,
        string $commodityCode,
        string $productCode,
        string $unitCode,
        int $unitCost
    ) {
        $this->description = $description;
        $this->commodityCode = $commodityCode;
        $this->productCode = $productCode;
        $this->unitCode = $unitCode;
        $this->unitCost = $unitCost;
    }

    /**
     * Returns Description.
     * Description of the item.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Description of the item.
     *
     * @required
     * @maps description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Commodity Code.
     * An international description code of the individual good or service being supplied.
     */
    public function getCommodityCode(): string
    {
        return $this->commodityCode;
    }

    /**
     * Sets Commodity Code.
     * An international description code of the individual good or service being supplied.
     *
     * @required
     * @maps commodity_code
     */
    public function setCommodityCode(string $commodityCode): void
    {
        $this->commodityCode = $commodityCode;
    }

    /**
     * Returns Discount Amount.
     * Total discount amount applied against the line item total ,Can accept Two (2) decimal places.
     */
    public function getDiscountAmount(): ?int
    {
        if (count($this->discountAmount) == 0) {
            return null;
        }
        return $this->discountAmount['value'];
    }

    /**
     * Sets Discount Amount.
     * Total discount amount applied against the line item total ,Can accept Two (2) decimal places.
     *
     * @maps discount_amount
     */
    public function setDiscountAmount(?int $discountAmount): void
    {
        $this->discountAmount['value'] = $discountAmount;
    }

    /**
     * Unsets Discount Amount.
     * Total discount amount applied against the line item total ,Can accept Two (2) decimal places.
     */
    public function unsetDiscountAmount(): void
    {
        $this->discountAmount = [];
    }

    /**
     * Returns Other Tax Amount.
     * Used if city or multiple county taxes need to be broken out separately ,Can accept Two (2) decimal
     * places.
     */
    public function getOtherTaxAmount(): ?int
    {
        if (count($this->otherTaxAmount) == 0) {
            return null;
        }
        return $this->otherTaxAmount['value'];
    }

    /**
     * Sets Other Tax Amount.
     * Used if city or multiple county taxes need to be broken out separately ,Can accept Two (2) decimal
     * places.
     *
     * @maps other_tax_amount
     */
    public function setOtherTaxAmount(?int $otherTaxAmount): void
    {
        $this->otherTaxAmount['value'] = $otherTaxAmount;
    }

    /**
     * Unsets Other Tax Amount.
     * Used if city or multiple county taxes need to be broken out separately ,Can accept Two (2) decimal
     * places.
     */
    public function unsetOtherTaxAmount(): void
    {
        $this->otherTaxAmount = [];
    }

    /**
     * Returns Product Code.
     * Merchant-defined description code of the item.
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }

    /**
     * Sets Product Code.
     * Merchant-defined description code of the item.
     *
     * @required
     * @maps product_code
     */
    public function setProductCode(string $productCode): void
    {
        $this->productCode = $productCode;
    }

    /**
     * Returns Quantity.
     * Quantity of the item, can accept Four (4) decimal places.
     */
    public function getQuantity(): ?int
    {
        if (count($this->quantity) == 0) {
            return null;
        }
        return $this->quantity['value'];
    }

    /**
     * Sets Quantity.
     * Quantity of the item, can accept Four (4) decimal places.
     *
     * @maps quantity
     */
    public function setQuantity(?int $quantity): void
    {
        $this->quantity['value'] = $quantity;
    }

    /**
     * Unsets Quantity.
     * Quantity of the item, can accept Four (4) decimal places.
     */
    public function unsetQuantity(): void
    {
        $this->quantity = [];
    }

    /**
     * Returns Tax Amount.
     * Amount of any value added taxes, can accept Two (2) decimal places.
     */
    public function getTaxAmount(): ?int
    {
        if (count($this->taxAmount) == 0) {
            return null;
        }
        return $this->taxAmount['value'];
    }

    /**
     * Sets Tax Amount.
     * Amount of any value added taxes, can accept Two (2) decimal places.
     *
     * @maps tax_amount
     */
    public function setTaxAmount(?int $taxAmount): void
    {
        $this->taxAmount['value'] = $taxAmount;
    }

    /**
     * Unsets Tax Amount.
     * Amount of any value added taxes, can accept Two (2) decimal places.
     */
    public function unsetTaxAmount(): void
    {
        $this->taxAmount = [];
    }

    /**
     * Returns Tax Rate.
     * Tax rate used to calculate the sales tax amount, can accept 2 decimal places.
     */
    public function getTaxRate(): ?int
    {
        if (count($this->taxRate) == 0) {
            return null;
        }
        return $this->taxRate['value'];
    }

    /**
     * Sets Tax Rate.
     * Tax rate used to calculate the sales tax amount, can accept 2 decimal places.
     *
     * @maps tax_rate
     */
    public function setTaxRate(?int $taxRate): void
    {
        $this->taxRate['value'] = $taxRate;
    }

    /**
     * Unsets Tax Rate.
     * Tax rate used to calculate the sales tax amount, can accept 2 decimal places.
     */
    public function unsetTaxRate(): void
    {
        $this->taxRate = [];
    }

    /**
     * Returns Unit Code.
     * Units of measurement as used in international trade. (See Codes for Units of Measurement below for
     * unit code abbreviations)
     */
    public function getUnitCode(): string
    {
        return $this->unitCode;
    }

    /**
     * Sets Unit Code.
     * Units of measurement as used in international trade. (See Codes for Units of Measurement below for
     * unit code abbreviations)
     *
     * @required
     * @maps unit_code
     */
    public function setUnitCode(string $unitCode): void
    {
        $this->unitCode = $unitCode;
    }

    /**
     * Returns Unit Cost.
     * Unit cost of the item ,Can accept Four (4) decimal places.
     */
    public function getUnitCost(): int
    {
        return $this->unitCost;
    }

    /**
     * Sets Unit Cost.
     * Unit cost of the item ,Can accept Four (4) decimal places.
     *
     * @required
     * @maps unit_cost
     */
    public function setUnitCost(int $unitCost): void
    {
        $this->unitCost = $unitCost;
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
        $json['description']          = $this->description;
        $json['commodity_code']       = $this->commodityCode;
        if (!empty($this->discountAmount)) {
            $json['discount_amount']  = $this->discountAmount['value'];
        }
        if (!empty($this->otherTaxAmount)) {
            $json['other_tax_amount'] = $this->otherTaxAmount['value'];
        }
        $json['product_code']         = $this->productCode;
        if (!empty($this->quantity)) {
            $json['quantity']         = $this->quantity['value'];
        }
        if (!empty($this->taxAmount)) {
            $json['tax_amount']       = $this->taxAmount['value'];
        }
        if (!empty($this->taxRate)) {
            $json['tax_rate']         = $this->taxRate['value'];
        }
        $json['unit_code']            = $this->unitCode;
        $json['unit_cost']            = $this->unitCost;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
