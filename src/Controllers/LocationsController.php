<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Controllers;

use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use FortisAPILib\Exceptions\ApiException;
use FortisAPILib\Exceptions\Response401tokenException;
use FortisAPILib\Models\Expand7Enum;
use FortisAPILib\Models\Filter3;
use FortisAPILib\Models\Page;
use FortisAPILib\Models\ResponseLocation;
use FortisAPILib\Models\ResponseLocationInfo;
use FortisAPILib\Models\ResponseLocationInfosCollection;
use FortisAPILib\Models\ResponseLocationsCollection;
use FortisAPILib\Models\Sort19;

class LocationsController extends BaseController
{
    /**
     * List all locations
     *
     * @param Page|null $page Use this field to specify paginate your results, by using page size
     *        and number. You can use one of the following methods:
     *        >/endpoint?page={ "number": 1, "size": 50 }
     *        >
     *        >/endpoint?page[number]=1&page[size]=50
     *        >
     * @param Sort19|null $sort You can use any `field_name` from this endpoint results, and you can
     *        combine more than one field for more complex sorting. You can use one of the
     *        following methods:
     *        >/endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
     *        >
     *        >/endpoint?sort[field_name]=asc&sort[field_name2]=desc
     *        >
     * @param Filter3|null $filter You can use any `field_name` from this endpoint results as a
     *        filter, and you can also use more than one field to create AND conditions. For date
     *        fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater
     *        than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the
     *        following methods:
     *        >/endpoint?filter={ "field_name": "Value" }
     *        >
     *        >/endpoint?filter[field_name]=Value
     *        >
     *        >/endpoint?filter={ "created_ts": "today" }
     *        >
     *        >/endpoint?filter[created_ts]=today
     *        >
     *        >/endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }
     *        >
     *        >/endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today
     *        >
     *        >/endpoint?filter[address][city]=memphis
     *        >
     *        >/endpoint?filter={ "address": { "city" : "memphis" } }
     *        >
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseLocationsCollection Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAllLocations(
        ?Page $page = null,
        ?Sort19 $sort = null,
        ?Filter3 $filter = null,
        ?array $expand = null
    ): ResponseLocationsCollection {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/locations')
            ->auth('global')
            ->parameters(
                QueryParam::init('page', $page),
                QueryParam::init('sort', $sort),
                QueryParam::init('filter', $filter),
                QueryParam::init('expand', $expand)->serializeBy([Expand7Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseLocationsCollection::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Locations Detail
     *
     * @param Page|null $page Use this field to specify paginate your results, by using page size
     *        and number. You can use one of the following methods:
     *        >/endpoint?page={ "number": 1, "size": 50 }
     *        >
     *        >/endpoint?page[number]=1&page[size]=50
     *        >
     * @param Sort19|null $sort You can use any `field_name` from this endpoint results, and you can
     *        combine more than one field for more complex sorting. You can use one of the
     *        following methods:
     *        >/endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
     *        >
     *        >/endpoint?sort[field_name]=asc&sort[field_name2]=desc
     *        >
     * @param Filter3|null $filter You can use any `field_name` from this endpoint results as a
     *        filter, and you can also use more than one field to create AND conditions. For date
     *        fields (ended with `_ts`), you can also search for ranges using the `$gte` (Greater
     *        than or equal to) and/or  `$lte` (Lower than or equal to). You can use one of the
     *        following methods:
     *        >/endpoint?filter={ "field_name": "Value" }
     *        >
     *        >/endpoint?filter[field_name]=Value
     *        >
     *        >/endpoint?filter={ "created_ts": "today" }
     *        >
     *        >/endpoint?filter[created_ts]=today
     *        >
     *        >/endpoint?filter={ "created_ts": { "$gte": "yesterday", "$lte": "today" } }
     *        >
     *        >/endpoint?filter[created_ts][$gte]=yesterday&filter[created_ts][$lte]=today
     *        >
     *        >/endpoint?filter[address][city]=memphis
     *        >
     *        >/endpoint?filter={ "address": { "city" : "memphis" } }
     *        >
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseLocationInfosCollection Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function locationsDetail(
        ?Page $page = null,
        ?Sort19 $sort = null,
        ?Filter3 $filter = null,
        ?array $expand = null
    ): ResponseLocationInfosCollection {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/locations/info')
            ->auth('global')
            ->parameters(
                QueryParam::init('page', $page),
                QueryParam::init('sort', $sort),
                QueryParam::init('filter', $filter),
                QueryParam::init('expand', $expand)->serializeBy([Expand7Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseLocationInfosCollection::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * View single location record
     *
     * @param string $locationId Location ID
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseLocation Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function viewSingleLocationRecord(string $locationId, ?array $expand = null): ResponseLocation
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/locations/{location_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('location_id', $locationId),
                QueryParam::init('expand', $expand)->serializeBy([Expand7Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseLocation::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Location Detail
     *
     * @param string $locationId Location ID
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseLocationInfo Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function locationDetail(string $locationId, ?array $expand = null): ResponseLocationInfo
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/locations/{location_id}/info')
            ->auth('global')
            ->parameters(
                TemplateParam::init('location_id', $locationId),
                QueryParam::init('expand', $expand)->serializeBy([Expand7Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseLocationInfo::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
