<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Models;

use Core\Utils\CoreHelper;
use Exception;
use stdClass;

/**
 * Status ID - See status id section for more detail
 * >101 - Sale cc Approved
 * >
 * >102 - Sale cc AuthOnly
 * >
 * >111 - Refund cc Refunded
 * >
 * >121 - Credit/Debit/Refund cc AvsOnly
 * >
 * >131 - Credit/Debit/Refund ach Pending Origination
 * >
 * >132 - Credit/Debit/Refund ach Originating
 * >
 * >133 - Credit/Debit/Refund ach Originated
 * >
 * >134 - Credit/Debit/Refund ach Settled
 * >
 * >191 - Settled (depracated - batches are now settled on the /v2/transactionbatches endpoint)
 * >
 * >201 - All cc/ach Voided
 * >
 * >301 - All cc/ach Declined
 * >
 * >331 - Credit/Debit/Refund ach Charged Back
 * >
 */
class StatusCode3Enum
{
    public const ENUM_101 = 101;

    public const ENUM_102 = 102;

    public const ENUM_111 = 111;

    public const ENUM_121 = 121;

    public const ENUM_131 = 131;

    public const ENUM_132 = 132;

    public const ENUM_133 = 133;

    public const ENUM_134 = 134;

    public const ENUM_191 = 191;

    public const ENUM_201 = 201;

    public const ENUM_301 = 301;

    public const ENUM_331 = 331;

    private const _ALL_VALUES = [
        self::ENUM_101,
        self::ENUM_102,
        self::ENUM_111,
        self::ENUM_121,
        self::ENUM_131,
        self::ENUM_132,
        self::ENUM_133,
        self::ENUM_134,
        self::ENUM_191,
        self::ENUM_201,
        self::ENUM_301,
        self::ENUM_331
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|int $value Value or a list/map of values to be checked
     *
     * @return array|null|int Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for StatusCode3Enum.");
    }
}
