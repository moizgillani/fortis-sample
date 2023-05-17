<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use stdClass;

class V1TerminalsRequest1 implements \JsonSerializable
{
    /**
     * @var array
     */
    private $locationId = [];

    /**
     * @var array
     */
    private $defaultProductTransactionId = [];

    /**
     * @var array
     */
    private $terminalApplicationId = [];

    /**
     * @var array
     */
    private $terminalCvmId = [];

    /**
     * @var array
     */
    private $terminalManufacturerCode = [];

    /**
     * @var array
     */
    private $title = [];

    /**
     * @var array
     */
    private $macAddress = [];

    /**
     * @var array
     */
    private $localIpAddress = [];

    /**
     * @var array
     */
    private $port = ['value' => 10009];

    /**
     * @var array
     */
    private $serialNumber = [];

    /**
     * @var array
     */
    private $terminalNumber = [];

    /**
     * @var TerminalTimeouts|null
     */
    private $terminalTimeouts;

    /**
     * @var TipPercents|null
     */
    private $tipPercents;

    /**
     * @var array
     */
    private $locationApiId = [];

    /**
     * @var array
     */
    private $terminalApiId = [];

    /**
     * @var array
     */
    private $headerLine1 = [];

    /**
     * @var array
     */
    private $headerLine2 = [];

    /**
     * @var array
     */
    private $headerLine3 = [];

    /**
     * @var array
     */
    private $headerLine4 = [];

    /**
     * @var array
     */
    private $headerLine5 = [];

    /**
     * @var array
     */
    private $trailerLine1 = [];

    /**
     * @var array
     */
    private $trailerLine2 = [];

    /**
     * @var array
     */
    private $trailerLine3 = [];

    /**
     * @var array
     */
    private $trailerLine4 = [];

    /**
     * @var array
     */
    private $trailerLine5 = [];

    /**
     * @var array
     */
    private $defaultCheckin = [];

    /**
     * @var array
     */
    private $defaultCheckout = [];

    /**
     * @var array
     */
    private $defaultRoomRate = [];

    /**
     * @var array
     */
    private $defaultRoomNumber = [];

    /**
     * @var bool|null
     */
    private $debit;

    /**
     * @var bool|null
     */
    private $emv;

    /**
     * @var bool|null
     */
    private $cashbackEnable;

    /**
     * @var bool|null
     */
    private $printEnable;

    /**
     * @var bool|null
     */
    private $sigCaptureEnable;

    /**
     * @var bool|null
     */
    private $isProvisioned;

    /**
     * @var bool|null
     */
    private $tipEnable;

    /**
     * @var bool|null
     */
    private $validatedDecryption;

    /**
     * @var array
     */
    private $communicationType = [];

    /**
     * @var bool|null
     */
    private $active;

    /**
     * Returns Location Id.
     * Location ID
     */
    public function getLocationId(): ?string
    {
        if (count($this->locationId) == 0) {
            return null;
        }
        return $this->locationId['value'];
    }

    /**
     * Sets Location Id.
     * Location ID
     *
     * @maps location_id
     */
    public function setLocationId(?string $locationId): void
    {
        $this->locationId['value'] = $locationId;
    }

    /**
     * Unsets Location Id.
     * Location ID
     */
    public function unsetLocationId(): void
    {
        $this->locationId = [];
    }

    /**
     * Returns Default Product Transaction Id.
     * Product Transaction ID
     */
    public function getDefaultProductTransactionId(): ?string
    {
        if (count($this->defaultProductTransactionId) == 0) {
            return null;
        }
        return $this->defaultProductTransactionId['value'];
    }

    /**
     * Sets Default Product Transaction Id.
     * Product Transaction ID
     *
     * @maps default_product_transaction_id
     */
    public function setDefaultProductTransactionId(?string $defaultProductTransactionId): void
    {
        $this->defaultProductTransactionId['value'] = $defaultProductTransactionId;
    }

    /**
     * Unsets Default Product Transaction Id.
     * Product Transaction ID
     */
    public function unsetDefaultProductTransactionId(): void
    {
        $this->defaultProductTransactionId = [];
    }

    /**
     * Returns Terminal Application Id.
     * Terminal Application ID
     */
    public function getTerminalApplicationId(): ?string
    {
        if (count($this->terminalApplicationId) == 0) {
            return null;
        }
        return $this->terminalApplicationId['value'];
    }

    /**
     * Sets Terminal Application Id.
     * Terminal Application ID
     *
     * @maps terminal_application_id
     */
    public function setTerminalApplicationId(?string $terminalApplicationId): void
    {
        $this->terminalApplicationId['value'] = $terminalApplicationId;
    }

    /**
     * Unsets Terminal Application Id.
     * Terminal Application ID
     */
    public function unsetTerminalApplicationId(): void
    {
        $this->terminalApplicationId = [];
    }

    /**
     * Returns Terminal Cvm Id.
     * Terminal CVM ID
     */
    public function getTerminalCvmId(): ?string
    {
        if (count($this->terminalCvmId) == 0) {
            return null;
        }
        return $this->terminalCvmId['value'];
    }

    /**
     * Sets Terminal Cvm Id.
     * Terminal CVM ID
     *
     * @maps terminal_cvm_id
     */
    public function setTerminalCvmId(?string $terminalCvmId): void
    {
        $this->terminalCvmId['value'] = $terminalCvmId;
    }

    /**
     * Unsets Terminal Cvm Id.
     * Terminal CVM ID
     */
    public function unsetTerminalCvmId(): void
    {
        $this->terminalCvmId = [];
    }

    /**
     * Returns Terminal Manufacturer Code.
     * Terminal Manufacturer Code
     */
    public function getTerminalManufacturerCode(): ?string
    {
        if (count($this->terminalManufacturerCode) == 0) {
            return null;
        }
        return $this->terminalManufacturerCode['value'];
    }

    /**
     * Sets Terminal Manufacturer Code.
     * Terminal Manufacturer Code
     *
     * @maps terminal_manufacturer_code
     * @factory \FortisAPILib\Models\TerminalManufacturerCodeEnum::checkValue
     */
    public function setTerminalManufacturerCode(?string $terminalManufacturerCode): void
    {
        $this->terminalManufacturerCode['value'] = $terminalManufacturerCode;
    }

    /**
     * Unsets Terminal Manufacturer Code.
     * Terminal Manufacturer Code
     */
    public function unsetTerminalManufacturerCode(): void
    {
        $this->terminalManufacturerCode = [];
    }

    /**
     * Returns Title.
     * Terminal Name
     */
    public function getTitle(): ?string
    {
        if (count($this->title) == 0) {
            return null;
        }
        return $this->title['value'];
    }

    /**
     * Sets Title.
     * Terminal Name
     *
     * @maps title
     */
    public function setTitle(?string $title): void
    {
        $this->title['value'] = $title;
    }

    /**
     * Unsets Title.
     * Terminal Name
     */
    public function unsetTitle(): void
    {
        $this->title = [];
    }

    /**
     * Returns Mac Address.
     * Terminal MAC Address
     */
    public function getMacAddress(): ?string
    {
        if (count($this->macAddress) == 0) {
            return null;
        }
        return $this->macAddress['value'];
    }

    /**
     * Sets Mac Address.
     * Terminal MAC Address
     *
     * @maps mac_address
     */
    public function setMacAddress(?string $macAddress): void
    {
        $this->macAddress['value'] = $macAddress;
    }

    /**
     * Unsets Mac Address.
     * Terminal MAC Address
     */
    public function unsetMacAddress(): void
    {
        $this->macAddress = [];
    }

    /**
     * Returns Local Ip Address.
     * Terminal Local IP Address
     */
    public function getLocalIpAddress(): ?string
    {
        if (count($this->localIpAddress) == 0) {
            return null;
        }
        return $this->localIpAddress['value'];
    }

    /**
     * Sets Local Ip Address.
     * Terminal Local IP Address
     *
     * @maps local_ip_address
     */
    public function setLocalIpAddress(?string $localIpAddress): void
    {
        $this->localIpAddress['value'] = $localIpAddress;
    }

    /**
     * Unsets Local Ip Address.
     * Terminal Local IP Address
     */
    public function unsetLocalIpAddress(): void
    {
        $this->localIpAddress = [];
    }

    /**
     * Returns Port.
     * Terminal Port
     */
    public function getPort(): ?int
    {
        if (count($this->port) == 0) {
            return null;
        }
        return $this->port['value'];
    }

    /**
     * Sets Port.
     * Terminal Port
     *
     * @maps port
     */
    public function setPort(?int $port): void
    {
        $this->port['value'] = $port;
    }

    /**
     * Unsets Port.
     * Terminal Port
     */
    public function unsetPort(): void
    {
        $this->port = [];
    }

    /**
     * Returns Serial Number.
     * Terminal Serial Number
     */
    public function getSerialNumber(): ?string
    {
        if (count($this->serialNumber) == 0) {
            return null;
        }
        return $this->serialNumber['value'];
    }

    /**
     * Sets Serial Number.
     * Terminal Serial Number
     *
     * @maps serial_number
     */
    public function setSerialNumber(?string $serialNumber): void
    {
        $this->serialNumber['value'] = $serialNumber;
    }

    /**
     * Unsets Serial Number.
     * Terminal Serial Number
     */
    public function unsetSerialNumber(): void
    {
        $this->serialNumber = [];
    }

    /**
     * Returns Terminal Number.
     * Terminal Number
     */
    public function getTerminalNumber(): ?string
    {
        if (count($this->terminalNumber) == 0) {
            return null;
        }
        return $this->terminalNumber['value'];
    }

    /**
     * Sets Terminal Number.
     * Terminal Number
     *
     * @maps terminal_number
     */
    public function setTerminalNumber(?string $terminalNumber): void
    {
        $this->terminalNumber['value'] = $terminalNumber;
    }

    /**
     * Unsets Terminal Number.
     * Terminal Number
     */
    public function unsetTerminalNumber(): void
    {
        $this->terminalNumber = [];
    }

    /**
     * Returns Terminal Timeouts.
     * The following options outlines some configurable timeout values that can be used to customize the
     * experience at the terminal for the cardholder.
     */
    public function getTerminalTimeouts(): ?TerminalTimeouts
    {
        return $this->terminalTimeouts;
    }

    /**
     * Sets Terminal Timeouts.
     * The following options outlines some configurable timeout values that can be used to customize the
     * experience at the terminal for the cardholder.
     *
     * @maps terminal_timeouts
     */
    public function setTerminalTimeouts(?TerminalTimeouts $terminalTimeouts): void
    {
        $this->terminalTimeouts = $terminalTimeouts;
    }

    /**
     * Returns Tip Percents.
     * A JSON of tip percents the JSON MUST contain only these three fields: percent_1, percent_2,
     * percent_3
     */
    public function getTipPercents(): ?TipPercents
    {
        return $this->tipPercents;
    }

    /**
     * Sets Tip Percents.
     * A JSON of tip percents the JSON MUST contain only these three fields: percent_1, percent_2,
     * percent_3
     *
     * @maps tip_percents
     */
    public function setTipPercents(?TipPercents $tipPercents): void
    {
        $this->tipPercents = $tipPercents;
    }

    /**
     * Returns Location Api Id.
     * Location Api ID
     */
    public function getLocationApiId(): ?string
    {
        if (count($this->locationApiId) == 0) {
            return null;
        }
        return $this->locationApiId['value'];
    }

    /**
     * Sets Location Api Id.
     * Location Api ID
     *
     * @maps location_api_id
     */
    public function setLocationApiId(?string $locationApiId): void
    {
        $this->locationApiId['value'] = $locationApiId;
    }

    /**
     * Unsets Location Api Id.
     * Location Api ID
     */
    public function unsetLocationApiId(): void
    {
        $this->locationApiId = [];
    }

    /**
     * Returns Terminal Api Id.
     * Terminal Api ID
     */
    public function getTerminalApiId(): ?string
    {
        if (count($this->terminalApiId) == 0) {
            return null;
        }
        return $this->terminalApiId['value'];
    }

    /**
     * Sets Terminal Api Id.
     * Terminal Api ID
     *
     * @maps terminal_api_id
     */
    public function setTerminalApiId(?string $terminalApiId): void
    {
        $this->terminalApiId['value'] = $terminalApiId;
    }

    /**
     * Unsets Terminal Api Id.
     * Terminal Api ID
     */
    public function unsetTerminalApiId(): void
    {
        $this->terminalApiId = [];
    }

    /**
     * Returns Header Line 1.
     * Header Line 1
     */
    public function getHeaderLine1(): ?string
    {
        if (count($this->headerLine1) == 0) {
            return null;
        }
        return $this->headerLine1['value'];
    }

    /**
     * Sets Header Line 1.
     * Header Line 1
     *
     * @maps header_line_1
     */
    public function setHeaderLine1(?string $headerLine1): void
    {
        $this->headerLine1['value'] = $headerLine1;
    }

    /**
     * Unsets Header Line 1.
     * Header Line 1
     */
    public function unsetHeaderLine1(): void
    {
        $this->headerLine1 = [];
    }

    /**
     * Returns Header Line 2.
     * Header Line 2
     */
    public function getHeaderLine2(): ?string
    {
        if (count($this->headerLine2) == 0) {
            return null;
        }
        return $this->headerLine2['value'];
    }

    /**
     * Sets Header Line 2.
     * Header Line 2
     *
     * @maps header_line_2
     */
    public function setHeaderLine2(?string $headerLine2): void
    {
        $this->headerLine2['value'] = $headerLine2;
    }

    /**
     * Unsets Header Line 2.
     * Header Line 2
     */
    public function unsetHeaderLine2(): void
    {
        $this->headerLine2 = [];
    }

    /**
     * Returns Header Line 3.
     * Header Line 3
     */
    public function getHeaderLine3(): ?string
    {
        if (count($this->headerLine3) == 0) {
            return null;
        }
        return $this->headerLine3['value'];
    }

    /**
     * Sets Header Line 3.
     * Header Line 3
     *
     * @maps header_line_3
     */
    public function setHeaderLine3(?string $headerLine3): void
    {
        $this->headerLine3['value'] = $headerLine3;
    }

    /**
     * Unsets Header Line 3.
     * Header Line 3
     */
    public function unsetHeaderLine3(): void
    {
        $this->headerLine3 = [];
    }

    /**
     * Returns Header Line 4.
     * Header Line 4
     */
    public function getHeaderLine4(): ?string
    {
        if (count($this->headerLine4) == 0) {
            return null;
        }
        return $this->headerLine4['value'];
    }

    /**
     * Sets Header Line 4.
     * Header Line 4
     *
     * @maps header_line_4
     */
    public function setHeaderLine4(?string $headerLine4): void
    {
        $this->headerLine4['value'] = $headerLine4;
    }

    /**
     * Unsets Header Line 4.
     * Header Line 4
     */
    public function unsetHeaderLine4(): void
    {
        $this->headerLine4 = [];
    }

    /**
     * Returns Header Line 5.
     * Header Line 5
     */
    public function getHeaderLine5(): ?string
    {
        if (count($this->headerLine5) == 0) {
            return null;
        }
        return $this->headerLine5['value'];
    }

    /**
     * Sets Header Line 5.
     * Header Line 5
     *
     * @maps header_line_5
     */
    public function setHeaderLine5(?string $headerLine5): void
    {
        $this->headerLine5['value'] = $headerLine5;
    }

    /**
     * Unsets Header Line 5.
     * Header Line 5
     */
    public function unsetHeaderLine5(): void
    {
        $this->headerLine5 = [];
    }

    /**
     * Returns Trailer Line 1.
     * Trailer Line 1
     */
    public function getTrailerLine1(): ?string
    {
        if (count($this->trailerLine1) == 0) {
            return null;
        }
        return $this->trailerLine1['value'];
    }

    /**
     * Sets Trailer Line 1.
     * Trailer Line 1
     *
     * @maps trailer_line_1
     */
    public function setTrailerLine1(?string $trailerLine1): void
    {
        $this->trailerLine1['value'] = $trailerLine1;
    }

    /**
     * Unsets Trailer Line 1.
     * Trailer Line 1
     */
    public function unsetTrailerLine1(): void
    {
        $this->trailerLine1 = [];
    }

    /**
     * Returns Trailer Line 2.
     * Trailer Line 2
     */
    public function getTrailerLine2(): ?string
    {
        if (count($this->trailerLine2) == 0) {
            return null;
        }
        return $this->trailerLine2['value'];
    }

    /**
     * Sets Trailer Line 2.
     * Trailer Line 2
     *
     * @maps trailer_line_2
     */
    public function setTrailerLine2(?string $trailerLine2): void
    {
        $this->trailerLine2['value'] = $trailerLine2;
    }

    /**
     * Unsets Trailer Line 2.
     * Trailer Line 2
     */
    public function unsetTrailerLine2(): void
    {
        $this->trailerLine2 = [];
    }

    /**
     * Returns Trailer Line 3.
     * Trailer Line 3
     */
    public function getTrailerLine3(): ?string
    {
        if (count($this->trailerLine3) == 0) {
            return null;
        }
        return $this->trailerLine3['value'];
    }

    /**
     * Sets Trailer Line 3.
     * Trailer Line 3
     *
     * @maps trailer_line_3
     */
    public function setTrailerLine3(?string $trailerLine3): void
    {
        $this->trailerLine3['value'] = $trailerLine3;
    }

    /**
     * Unsets Trailer Line 3.
     * Trailer Line 3
     */
    public function unsetTrailerLine3(): void
    {
        $this->trailerLine3 = [];
    }

    /**
     * Returns Trailer Line 4.
     * Trailer Line 4
     */
    public function getTrailerLine4(): ?string
    {
        if (count($this->trailerLine4) == 0) {
            return null;
        }
        return $this->trailerLine4['value'];
    }

    /**
     * Sets Trailer Line 4.
     * Trailer Line 4
     *
     * @maps trailer_line_4
     */
    public function setTrailerLine4(?string $trailerLine4): void
    {
        $this->trailerLine4['value'] = $trailerLine4;
    }

    /**
     * Unsets Trailer Line 4.
     * Trailer Line 4
     */
    public function unsetTrailerLine4(): void
    {
        $this->trailerLine4 = [];
    }

    /**
     * Returns Trailer Line 5.
     * Trailer Line 5
     */
    public function getTrailerLine5(): ?string
    {
        if (count($this->trailerLine5) == 0) {
            return null;
        }
        return $this->trailerLine5['value'];
    }

    /**
     * Sets Trailer Line 5.
     * Trailer Line 5
     *
     * @maps trailer_line_5
     */
    public function setTrailerLine5(?string $trailerLine5): void
    {
        $this->trailerLine5['value'] = $trailerLine5;
    }

    /**
     * Unsets Trailer Line 5.
     * Trailer Line 5
     */
    public function unsetTrailerLine5(): void
    {
        $this->trailerLine5 = [];
    }

    /**
     * Returns Default Checkin.
     * Default Checkin
     */
    public function getDefaultCheckin(): ?string
    {
        if (count($this->defaultCheckin) == 0) {
            return null;
        }
        return $this->defaultCheckin['value'];
    }

    /**
     * Sets Default Checkin.
     * Default Checkin
     *
     * @maps default_checkin
     */
    public function setDefaultCheckin(?string $defaultCheckin): void
    {
        $this->defaultCheckin['value'] = $defaultCheckin;
    }

    /**
     * Unsets Default Checkin.
     * Default Checkin
     */
    public function unsetDefaultCheckin(): void
    {
        $this->defaultCheckin = [];
    }

    /**
     * Returns Default Checkout.
     * Default Checkout
     */
    public function getDefaultCheckout(): ?string
    {
        if (count($this->defaultCheckout) == 0) {
            return null;
        }
        return $this->defaultCheckout['value'];
    }

    /**
     * Sets Default Checkout.
     * Default Checkout
     *
     * @maps default_checkout
     */
    public function setDefaultCheckout(?string $defaultCheckout): void
    {
        $this->defaultCheckout['value'] = $defaultCheckout;
    }

    /**
     * Unsets Default Checkout.
     * Default Checkout
     */
    public function unsetDefaultCheckout(): void
    {
        $this->defaultCheckout = [];
    }

    /**
     * Returns Default Room Rate.
     * Default Room Rate
     */
    public function getDefaultRoomRate(): ?int
    {
        if (count($this->defaultRoomRate) == 0) {
            return null;
        }
        return $this->defaultRoomRate['value'];
    }

    /**
     * Sets Default Room Rate.
     * Default Room Rate
     *
     * @maps default_room_rate
     */
    public function setDefaultRoomRate(?int $defaultRoomRate): void
    {
        $this->defaultRoomRate['value'] = $defaultRoomRate;
    }

    /**
     * Unsets Default Room Rate.
     * Default Room Rate
     */
    public function unsetDefaultRoomRate(): void
    {
        $this->defaultRoomRate = [];
    }

    /**
     * Returns Default Room Number.
     * Default Room Number
     */
    public function getDefaultRoomNumber(): ?string
    {
        if (count($this->defaultRoomNumber) == 0) {
            return null;
        }
        return $this->defaultRoomNumber['value'];
    }

    /**
     * Sets Default Room Number.
     * Default Room Number
     *
     * @maps default_room_number
     */
    public function setDefaultRoomNumber(?string $defaultRoomNumber): void
    {
        $this->defaultRoomNumber['value'] = $defaultRoomNumber;
    }

    /**
     * Unsets Default Room Number.
     * Default Room Number
     */
    public function unsetDefaultRoomNumber(): void
    {
        $this->defaultRoomNumber = [];
    }

    /**
     * Returns Debit.
     * Debit
     */
    public function getDebit(): ?bool
    {
        return $this->debit;
    }

    /**
     * Sets Debit.
     * Debit
     *
     * @maps debit
     */
    public function setDebit(?bool $debit): void
    {
        $this->debit = $debit;
    }

    /**
     * Returns Emv.
     * EMV
     */
    public function getEmv(): ?bool
    {
        return $this->emv;
    }

    /**
     * Sets Emv.
     * EMV
     *
     * @maps emv
     */
    public function setEmv(?bool $emv): void
    {
        $this->emv = $emv;
    }

    /**
     * Returns Cashback Enable.
     * Cashback Enable
     */
    public function getCashbackEnable(): ?bool
    {
        return $this->cashbackEnable;
    }

    /**
     * Sets Cashback Enable.
     * Cashback Enable
     *
     * @maps cashback_enable
     */
    public function setCashbackEnable(?bool $cashbackEnable): void
    {
        $this->cashbackEnable = $cashbackEnable;
    }

    /**
     * Returns Print Enable.
     * Print Enable
     */
    public function getPrintEnable(): ?bool
    {
        return $this->printEnable;
    }

    /**
     * Sets Print Enable.
     * Print Enable
     *
     * @maps print_enable
     */
    public function setPrintEnable(?bool $printEnable): void
    {
        $this->printEnable = $printEnable;
    }

    /**
     * Returns Sig Capture Enable.
     * Sig Capture Enable
     */
    public function getSigCaptureEnable(): ?bool
    {
        return $this->sigCaptureEnable;
    }

    /**
     * Sets Sig Capture Enable.
     * Sig Capture Enable
     *
     * @maps sig_capture_enable
     */
    public function setSigCaptureEnable(?bool $sigCaptureEnable): void
    {
        $this->sigCaptureEnable = $sigCaptureEnable;
    }

    /**
     * Returns Is Provisioned.
     * Is Provisioned
     */
    public function getIsProvisioned(): ?bool
    {
        return $this->isProvisioned;
    }

    /**
     * Sets Is Provisioned.
     * Is Provisioned
     *
     * @maps is_provisioned
     */
    public function setIsProvisioned(?bool $isProvisioned): void
    {
        $this->isProvisioned = $isProvisioned;
    }

    /**
     * Returns Tip Enable.
     * Tip Enable
     */
    public function getTipEnable(): ?bool
    {
        return $this->tipEnable;
    }

    /**
     * Sets Tip Enable.
     * Tip Enable
     *
     * @maps tip_enable
     */
    public function setTipEnable(?bool $tipEnable): void
    {
        $this->tipEnable = $tipEnable;
    }

    /**
     * Returns Validated Decryption.
     * Validated Decryption
     */
    public function getValidatedDecryption(): ?bool
    {
        return $this->validatedDecryption;
    }

    /**
     * Sets Validated Decryption.
     * Validated Decryption
     *
     * @maps validated_decryption
     */
    public function setValidatedDecryption(?bool $validatedDecryption): void
    {
        $this->validatedDecryption = $validatedDecryption;
    }

    /**
     * Returns Communication Type.
     * Communication Type
     */
    public function getCommunicationType(): ?string
    {
        if (count($this->communicationType) == 0) {
            return null;
        }
        return $this->communicationType['value'];
    }

    /**
     * Sets Communication Type.
     * Communication Type
     *
     * @maps communication_type
     * @factory \FortisAPILib\Models\CommunicationTypeEnum::checkValue
     */
    public function setCommunicationType(?string $communicationType): void
    {
        $this->communicationType['value'] = $communicationType;
    }

    /**
     * Unsets Communication Type.
     * Communication Type
     */
    public function unsetCommunicationType(): void
    {
        $this->communicationType = [];
    }

    /**
     * Returns Active.
     * Active
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     * Active
     *
     * @maps active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
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
        if (!empty($this->locationId)) {
            $json['location_id']                    = $this->locationId['value'];
        }
        if (!empty($this->defaultProductTransactionId)) {
            $json['default_product_transaction_id'] = $this->defaultProductTransactionId['value'];
        }
        if (!empty($this->terminalApplicationId)) {
            $json['terminal_application_id']        = $this->terminalApplicationId['value'];
        }
        if (!empty($this->terminalCvmId)) {
            $json['terminal_cvm_id']                = $this->terminalCvmId['value'];
        }
        if (!empty($this->terminalManufacturerCode)) {
            $json['terminal_manufacturer_code']     =
                TerminalManufacturerCodeEnum::checkValue(
                    $this->terminalManufacturerCode['value']
                );
        }
        if (!empty($this->title)) {
            $json['title']                          = $this->title['value'];
        }
        if (!empty($this->macAddress)) {
            $json['mac_address']                    = $this->macAddress['value'];
        }
        if (!empty($this->localIpAddress)) {
            $json['local_ip_address']               = $this->localIpAddress['value'];
        }
        if (!empty($this->port)) {
            $json['port']                           = $this->port['value'];
        }
        if (!empty($this->serialNumber)) {
            $json['serial_number']                  = $this->serialNumber['value'];
        }
        if (!empty($this->terminalNumber)) {
            $json['terminal_number']                = $this->terminalNumber['value'];
        }
        if (isset($this->terminalTimeouts)) {
            $json['terminal_timeouts']              = $this->terminalTimeouts;
        }
        if (isset($this->tipPercents)) {
            $json['tip_percents']                   = $this->tipPercents;
        }
        if (!empty($this->locationApiId)) {
            $json['location_api_id']                = $this->locationApiId['value'];
        }
        if (!empty($this->terminalApiId)) {
            $json['terminal_api_id']                = $this->terminalApiId['value'];
        }
        if (!empty($this->headerLine1)) {
            $json['header_line_1']                  = $this->headerLine1['value'];
        }
        if (!empty($this->headerLine2)) {
            $json['header_line_2']                  = $this->headerLine2['value'];
        }
        if (!empty($this->headerLine3)) {
            $json['header_line_3']                  = $this->headerLine3['value'];
        }
        if (!empty($this->headerLine4)) {
            $json['header_line_4']                  = $this->headerLine4['value'];
        }
        if (!empty($this->headerLine5)) {
            $json['header_line_5']                  = $this->headerLine5['value'];
        }
        if (!empty($this->trailerLine1)) {
            $json['trailer_line_1']                 = $this->trailerLine1['value'];
        }
        if (!empty($this->trailerLine2)) {
            $json['trailer_line_2']                 = $this->trailerLine2['value'];
        }
        if (!empty($this->trailerLine3)) {
            $json['trailer_line_3']                 = $this->trailerLine3['value'];
        }
        if (!empty($this->trailerLine4)) {
            $json['trailer_line_4']                 = $this->trailerLine4['value'];
        }
        if (!empty($this->trailerLine5)) {
            $json['trailer_line_5']                 = $this->trailerLine5['value'];
        }
        if (!empty($this->defaultCheckin)) {
            $json['default_checkin']                = $this->defaultCheckin['value'];
        }
        if (!empty($this->defaultCheckout)) {
            $json['default_checkout']               = $this->defaultCheckout['value'];
        }
        if (!empty($this->defaultRoomRate)) {
            $json['default_room_rate']              = $this->defaultRoomRate['value'];
        }
        if (!empty($this->defaultRoomNumber)) {
            $json['default_room_number']            = $this->defaultRoomNumber['value'];
        }
        if (isset($this->debit)) {
            $json['debit']                          = $this->debit;
        }
        if (isset($this->emv)) {
            $json['emv']                            = $this->emv;
        }
        if (isset($this->cashbackEnable)) {
            $json['cashback_enable']                = $this->cashbackEnable;
        }
        if (isset($this->printEnable)) {
            $json['print_enable']                   = $this->printEnable;
        }
        if (isset($this->sigCaptureEnable)) {
            $json['sig_capture_enable']             = $this->sigCaptureEnable;
        }
        if (isset($this->isProvisioned)) {
            $json['is_provisioned']                 = $this->isProvisioned;
        }
        if (isset($this->tipEnable)) {
            $json['tip_enable']                     = $this->tipEnable;
        }
        if (isset($this->validatedDecryption)) {
            $json['validated_decryption']           = $this->validatedDecryption;
        }
        if (!empty($this->communicationType)) {
            $json['communication_type']             =
                CommunicationTypeEnum::checkValue(
                    $this->communicationType['value']
                );
        }
        if (isset($this->active)) {
            $json['active']                         = $this->active;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
