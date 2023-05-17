<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models\Builders;

use Core\Utils\CoreHelper;
use FortisAPILib\Models\List5;

/**
 * Builder for model List5
 *
 * @see List5
 */
class List5Builder
{
    /**
     * @var List5
     */
    private $instance;

    private function __construct(List5 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list 5 Builder object.
     */
    public static function init(int $amountDue, string $id, int $createdTs, int $modifiedTs): self
    {
        return new self(new List5($amountDue, $id, $createdTs, $modifiedTs));
    }

    /**
     * Sets location id field.
     */
    public function locationId(?string $value): self
    {
        $this->instance->setLocationId($value);
        return $this;
    }

    /**
     * Unsets location id field.
     */
    public function unsetLocationId(): self
    {
        $this->instance->unsetLocationId();
        return $this;
    }

    /**
     * Sets cc product transaction id field.
     */
    public function ccProductTransactionId(?string $value): self
    {
        $this->instance->setCcProductTransactionId($value);
        return $this;
    }

    /**
     * Unsets cc product transaction id field.
     */
    public function unsetCcProductTransactionId(): self
    {
        $this->instance->unsetCcProductTransactionId();
        return $this;
    }

    /**
     * Sets email field.
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Unsets email field.
     */
    public function unsetEmail(): self
    {
        $this->instance->unsetEmail();
        return $this;
    }

    /**
     * Sets location api id field.
     */
    public function locationApiId(?string $value): self
    {
        $this->instance->setLocationApiId($value);
        return $this;
    }

    /**
     * Unsets location api id field.
     */
    public function unsetLocationApiId(): self
    {
        $this->instance->unsetLocationApiId();
        return $this;
    }

    /**
     * Sets contact id field.
     */
    public function contactId(?string $value): self
    {
        $this->instance->setContactId($value);
        return $this;
    }

    /**
     * Unsets contact id field.
     */
    public function unsetContactId(): self
    {
        $this->instance->unsetContactId();
        return $this;
    }

    /**
     * Sets contact api id field.
     */
    public function contactApiId(?string $value): self
    {
        $this->instance->setContactApiId($value);
        return $this;
    }

    /**
     * Unsets contact api id field.
     */
    public function unsetContactApiId(): self
    {
        $this->instance->unsetContactApiId();
        return $this;
    }

    /**
     * Sets paylink api id field.
     */
    public function paylinkApiId(?string $value): self
    {
        $this->instance->setPaylinkApiId($value);
        return $this;
    }

    /**
     * Unsets paylink api id field.
     */
    public function unsetPaylinkApiId(): self
    {
        $this->instance->unsetPaylinkApiId();
        return $this;
    }

    /**
     * Sets ach product transaction id field.
     */
    public function achProductTransactionId(?string $value): self
    {
        $this->instance->setAchProductTransactionId($value);
        return $this;
    }

    /**
     * Unsets ach product transaction id field.
     */
    public function unsetAchProductTransactionId(): self
    {
        $this->instance->unsetAchProductTransactionId();
        return $this;
    }

    /**
     * Sets expire date field.
     */
    public function expireDate(?string $value): self
    {
        $this->instance->setExpireDate($value);
        return $this;
    }

    /**
     * Unsets expire date field.
     */
    public function unsetExpireDate(): self
    {
        $this->instance->unsetExpireDate();
        return $this;
    }

    /**
     * Sets display product transaction receipt details field.
     */
    public function displayProductTransactionReceiptDetails(?bool $value): self
    {
        $this->instance->setDisplayProductTransactionReceiptDetails($value);
        return $this;
    }

    /**
     * Sets display billing fields field.
     */
    public function displayBillingFields(?bool $value): self
    {
        $this->instance->setDisplayBillingFields($value);
        return $this;
    }

    /**
     * Sets delivery method field.
     */
    public function deliveryMethod(?int $value): self
    {
        $this->instance->setDeliveryMethod($value);
        return $this;
    }

    /**
     * Unsets delivery method field.
     */
    public function unsetDeliveryMethod(): self
    {
        $this->instance->unsetDeliveryMethod();
        return $this;
    }

    /**
     * Sets cell phone field.
     */
    public function cellPhone(?string $value): self
    {
        $this->instance->setCellPhone($value);
        return $this;
    }

    /**
     * Unsets cell phone field.
     */
    public function unsetCellPhone(): self
    {
        $this->instance->unsetCellPhone();
        return $this;
    }

    /**
     * Sets description field.
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
        return $this;
    }

    /**
     * Sets store token field.
     */
    public function storeToken(?bool $value): self
    {
        $this->instance->setStoreToken($value);
        return $this;
    }

    /**
     * Sets store token title field.
     */
    public function storeTokenTitle(?string $value): self
    {
        $this->instance->setStoreTokenTitle($value);
        return $this;
    }

    /**
     * Unsets store token title field.
     */
    public function unsetStoreTokenTitle(): self
    {
        $this->instance->unsetStoreTokenTitle();
        return $this;
    }

    /**
     * Sets paylink action field.
     */
    public function paylinkAction(?string $value): self
    {
        $this->instance->setPaylinkAction($value);
        return $this;
    }

    /**
     * Unsets paylink action field.
     */
    public function unsetPaylinkAction(): self
    {
        $this->instance->unsetPaylinkAction();
        return $this;
    }

    /**
     * Sets bank funded only override field.
     */
    public function bankFundedOnlyOverride(?bool $value): self
    {
        $this->instance->setBankFundedOnlyOverride($value);
        return $this;
    }

    /**
     * Sets tags field.
     */
    public function tags(?array $value): self
    {
        $this->instance->setTags($value);
        return $this;
    }

    /**
     * Sets status id field.
     */
    public function statusId(?bool $value): self
    {
        $this->instance->setStatusId($value);
        return $this;
    }

    /**
     * Sets status code field.
     */
    public function statusCode(?int $value): self
    {
        $this->instance->setStatusCode($value);
        return $this;
    }

    /**
     * Unsets status code field.
     */
    public function unsetStatusCode(): self
    {
        $this->instance->unsetStatusCode();
        return $this;
    }

    /**
     * Sets active field.
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
        return $this;
    }

    /**
     * Sets created user id field.
     */
    public function createdUserId(?string $value): self
    {
        $this->instance->setCreatedUserId($value);
        return $this;
    }

    /**
     * Unsets created user id field.
     */
    public function unsetCreatedUserId(): self
    {
        $this->instance->unsetCreatedUserId();
        return $this;
    }

    /**
     * Sets modified user id field.
     */
    public function modifiedUserId(?string $value): self
    {
        $this->instance->setModifiedUserId($value);
        return $this;
    }

    /**
     * Unsets modified user id field.
     */
    public function unsetModifiedUserId(): self
    {
        $this->instance->unsetModifiedUserId();
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new list 5 object.
     */
    public function build(): List5
    {
        return CoreHelper::clone($this->instance);
    }
}
