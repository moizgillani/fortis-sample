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

class Expand41Enum
{
    public const LOCATION = 'location';

    public const CONTACT = 'contact';

    public const TRANSACTIONS = 'transactions';

    public const ACTIVERECURRINGS = 'activeRecurrings';

    public const IS_DELETABLE = 'is_deletable';

    public const SIGNATURE = 'signature';

    public const CREATED_USER = 'created_user';

    public const CHANGELOGS = 'changelogs';

    public const ACCOUNT_VAULT_CAU_LOGS = 'account_vault_cau_logs';

    public const ACCOUNT_VAULT_CAU_PRODUCT_TRANSACTIONS = 'account_vault_cau_product_transactions';

    private const _ALL_VALUES = [
        self::LOCATION,
        self::CONTACT,
        self::TRANSACTIONS,
        self::ACTIVERECURRINGS,
        self::IS_DELETABLE,
        self::SIGNATURE,
        self::CREATED_USER,
        self::CHANGELOGS,
        self::ACCOUNT_VAULT_CAU_LOGS,
        self::ACCOUNT_VAULT_CAU_PRODUCT_TRANSACTIONS
    ];

    /**
     * Ensures that all the given values are present in this Enum.
     *
     * @param array|stdClass|null|string $value Value or a list/map of values to be checked
     *
     * @return array|null|string Input value(s), if all are a part of this Enum
     *
     * @throws Exception Throws exception if any given value is not in this Enum
     */
    public static function checkValue($value)
    {
        $value = json_decode(json_encode($value), true); // converts stdClass into array
        if (CoreHelper::checkValueOrValuesInList($value, self::_ALL_VALUES)) {
            return $value;
        }
        throw new Exception("$value is invalid for Expand41Enum.");
    }
}