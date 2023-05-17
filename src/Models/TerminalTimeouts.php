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
 * The following options outlines some configurable timeout values that can be used to customize the
 * experience at the terminal for the cardholder.
 */
class TerminalTimeouts implements \JsonSerializable
{
    /**
     * @var array
     */
    private $cardEntryTimeout = ['value' => 120];

    /**
     * @var array
     */
    private $deviceTermsPromptTimeout = ['value' => 60];

    /**
     * @var array
     */
    private $overallTimeout = ['value' => 300];

    /**
     * @var array
     */
    private $pinEntryTimeout = ['value' => 30];

    /**
     * @var array
     */
    private $signatureInputTimeout = ['value' => 10];

    /**
     * @var array
     */
    private $signatureSubmitTimeout = ['value' => 30];

    /**
     * @var array
     */
    private $statusDisplayTime = ['value' => 7];

    /**
     * @var array
     */
    private $tipCashbackTimeout = ['value' => 30];

    /**
     * @var array
     */
    private $transactionTimeout = ['value' => 10];

    /**
     * Returns Card Entry Timeout.
     * How long to wait for input from cardholder.
     */
    public function getCardEntryTimeout(): ?int
    {
        if (count($this->cardEntryTimeout) == 0) {
            return null;
        }
        return $this->cardEntryTimeout['value'];
    }

    /**
     * Sets Card Entry Timeout.
     * How long to wait for input from cardholder.
     *
     * @maps card_entry_timeout
     */
    public function setCardEntryTimeout(?int $cardEntryTimeout): void
    {
        $this->cardEntryTimeout['value'] = $cardEntryTimeout;
    }

    /**
     * Unsets Card Entry Timeout.
     * How long to wait for input from cardholder.
     */
    public function unsetCardEntryTimeout(): void
    {
        $this->cardEntryTimeout = [];
    }

    /**
     * Returns Device Terms Prompt Timeout.
     * How long the terms will be displayed on the device.
     */
    public function getDeviceTermsPromptTimeout(): ?int
    {
        if (count($this->deviceTermsPromptTimeout) == 0) {
            return null;
        }
        return $this->deviceTermsPromptTimeout['value'];
    }

    /**
     * Sets Device Terms Prompt Timeout.
     * How long the terms will be displayed on the device.
     *
     * @maps device_terms_prompt_timeout
     */
    public function setDeviceTermsPromptTimeout(?int $deviceTermsPromptTimeout): void
    {
        $this->deviceTermsPromptTimeout['value'] = $deviceTermsPromptTimeout;
    }

    /**
     * Unsets Device Terms Prompt Timeout.
     * How long the terms will be displayed on the device.
     */
    public function unsetDeviceTermsPromptTimeout(): void
    {
        $this->deviceTermsPromptTimeout = [];
    }

    /**
     * Returns Overall Timeout.
     * How long to wait for response from /v2/routertransactions endpoint.
     */
    public function getOverallTimeout(): ?int
    {
        if (count($this->overallTimeout) == 0) {
            return null;
        }
        return $this->overallTimeout['value'];
    }

    /**
     * Sets Overall Timeout.
     * How long to wait for response from /v2/routertransactions endpoint.
     *
     * @maps overall_timeout
     */
    public function setOverallTimeout(?int $overallTimeout): void
    {
        $this->overallTimeout['value'] = $overallTimeout;
    }

    /**
     * Unsets Overall Timeout.
     * How long to wait for response from /v2/routertransactions endpoint.
     */
    public function unsetOverallTimeout(): void
    {
        $this->overallTimeout = [];
    }

    /**
     * Returns Pin Entry Timeout.
     * How long to wait for pin entry by cardholder.
     */
    public function getPinEntryTimeout(): ?int
    {
        if (count($this->pinEntryTimeout) == 0) {
            return null;
        }
        return $this->pinEntryTimeout['value'];
    }

    /**
     * Sets Pin Entry Timeout.
     * How long to wait for pin entry by cardholder.
     *
     * @maps pin_entry_timeout
     */
    public function setPinEntryTimeout(?int $pinEntryTimeout): void
    {
        $this->pinEntryTimeout['value'] = $pinEntryTimeout;
    }

    /**
     * Unsets Pin Entry Timeout.
     * How long to wait for pin entry by cardholder.
     */
    public function unsetPinEntryTimeout(): void
    {
        $this->pinEntryTimeout = [];
    }

    /**
     * Returns Signature Input Timeout.
     * How long to wait for first "touch" to signature.
     */
    public function getSignatureInputTimeout(): ?int
    {
        if (count($this->signatureInputTimeout) == 0) {
            return null;
        }
        return $this->signatureInputTimeout['value'];
    }

    /**
     * Sets Signature Input Timeout.
     * How long to wait for first "touch" to signature.
     *
     * @maps signature_input_timeout
     */
    public function setSignatureInputTimeout(?int $signatureInputTimeout): void
    {
        $this->signatureInputTimeout['value'] = $signatureInputTimeout;
    }

    /**
     * Unsets Signature Input Timeout.
     * How long to wait for first "touch" to signature.
     */
    public function unsetSignatureInputTimeout(): void
    {
        $this->signatureInputTimeout = [];
    }

    /**
     * Returns Signature Submit Timeout.
     * How long to wait for signature to be submitted.
     */
    public function getSignatureSubmitTimeout(): ?int
    {
        if (count($this->signatureSubmitTimeout) == 0) {
            return null;
        }
        return $this->signatureSubmitTimeout['value'];
    }

    /**
     * Sets Signature Submit Timeout.
     * How long to wait for signature to be submitted.
     *
     * @maps signature_submit_timeout
     */
    public function setSignatureSubmitTimeout(?int $signatureSubmitTimeout): void
    {
        $this->signatureSubmitTimeout['value'] = $signatureSubmitTimeout;
    }

    /**
     * Unsets Signature Submit Timeout.
     * How long to wait for signature to be submitted.
     */
    public function unsetSignatureSubmitTimeout(): void
    {
        $this->signatureSubmitTimeout = [];
    }

    /**
     * Returns Status Display Time.
     * How long the approve/decline status message stays on screen.
     */
    public function getStatusDisplayTime(): ?int
    {
        if (count($this->statusDisplayTime) == 0) {
            return null;
        }
        return $this->statusDisplayTime['value'];
    }

    /**
     * Sets Status Display Time.
     * How long the approve/decline status message stays on screen.
     *
     * @maps status_display_time
     */
    public function setStatusDisplayTime(?int $statusDisplayTime): void
    {
        $this->statusDisplayTime['value'] = $statusDisplayTime;
    }

    /**
     * Unsets Status Display Time.
     * How long the approve/decline status message stays on screen.
     */
    public function unsetStatusDisplayTime(): void
    {
        $this->statusDisplayTime = [];
    }

    /**
     * Returns Tip Cashback Timeout.
     * How long to wait for input on a tip or cashback screen.
     */
    public function getTipCashbackTimeout(): ?int
    {
        if (count($this->tipCashbackTimeout) == 0) {
            return null;
        }
        return $this->tipCashbackTimeout['value'];
    }

    /**
     * Sets Tip Cashback Timeout.
     * How long to wait for input on a tip or cashback screen.
     *
     * @maps tip_cashback_timeout
     */
    public function setTipCashbackTimeout(?int $tipCashbackTimeout): void
    {
        $this->tipCashbackTimeout['value'] = $tipCashbackTimeout;
    }

    /**
     * Unsets Tip Cashback Timeout.
     * How long to wait for input on a tip or cashback screen.
     */
    public function unsetTipCashbackTimeout(): void
    {
        $this->tipCashbackTimeout = [];
    }

    /**
     * Returns Transaction Timeout.
     * How long to wait for response from the processor.
     */
    public function getTransactionTimeout(): ?int
    {
        if (count($this->transactionTimeout) == 0) {
            return null;
        }
        return $this->transactionTimeout['value'];
    }

    /**
     * Sets Transaction Timeout.
     * How long to wait for response from the processor.
     *
     * @maps transaction_timeout
     */
    public function setTransactionTimeout(?int $transactionTimeout): void
    {
        $this->transactionTimeout['value'] = $transactionTimeout;
    }

    /**
     * Unsets Transaction Timeout.
     * How long to wait for response from the processor.
     */
    public function unsetTransactionTimeout(): void
    {
        $this->transactionTimeout = [];
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
        if (!empty($this->cardEntryTimeout)) {
            $json['card_entry_timeout']          = $this->cardEntryTimeout['value'];
        }
        if (!empty($this->deviceTermsPromptTimeout)) {
            $json['device_terms_prompt_timeout'] = $this->deviceTermsPromptTimeout['value'];
        }
        if (!empty($this->overallTimeout)) {
            $json['overall_timeout']             = $this->overallTimeout['value'];
        }
        if (!empty($this->pinEntryTimeout)) {
            $json['pin_entry_timeout']           = $this->pinEntryTimeout['value'];
        }
        if (!empty($this->signatureInputTimeout)) {
            $json['signature_input_timeout']     = $this->signatureInputTimeout['value'];
        }
        if (!empty($this->signatureSubmitTimeout)) {
            $json['signature_submit_timeout']    = $this->signatureSubmitTimeout['value'];
        }
        if (!empty($this->statusDisplayTime)) {
            $json['status_display_time']         = $this->statusDisplayTime['value'];
        }
        if (!empty($this->tipCashbackTimeout)) {
            $json['tip_cashback_timeout']        = $this->tipCashbackTimeout['value'];
        }
        if (!empty($this->transactionTimeout)) {
            $json['transaction_timeout']         = $this->transactionTimeout['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}