<?php

declare(strict_types=1);

/*
 * FortisAPILib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace FortisAPILib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use FortisAPILib\Exceptions\ApiException;
use FortisAPILib\Exceptions\Response401tokenException;
use FortisAPILib\Exceptions\Response412Exception;
use FortisAPILib\Models\Expand38Enum;
use FortisAPILib\Models\Filter11;
use FortisAPILib\Models\Page;
use FortisAPILib\Models\ResponseTicket;
use FortisAPILib\Models\ResponseTicketsCollection;
use FortisAPILib\Models\Sort27;
use FortisAPILib\Models\V1TicketsRequest;

class TicketsController extends BaseController
{
    /**
     * Create a Ticket record.
     *
     * @param V1TicketsRequest $body
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTicket Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createATicketRecord(V1TicketsRequest $body, ?array $expand = null): ResponseTicket
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/v1/tickets')
            ->auth('global')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('expand', $expand)->serializeBy([Expand38Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->throwErrorOn('412', ErrorType::init('Precondition Failed', Response412Exception::class))
            ->type(ResponseTicket::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * List all tickets related
     *
     * @param Page|null $page Use this field to specify paginate your results, by using page size
     *        and number. You can use one of the following methods:
     *        >/endpoint?page={ "number": 1, "size": 50 }
     *        >
     *        >/endpoint?page[number]=1&page[size]=50
     *        >
     * @param Sort27|null $sort You can use any `field_name` from this endpoint results, and you can
     *        combine more than one field for more complex sorting. You can use one of the
     *        following methods:
     *        >/endpoint?sort={ "field_name": "asc", "field_name2": "desc" }
     *        >
     *        >/endpoint?sort[field_name]=asc&sort[field_name2]=desc
     *        >
     * @param Filter11|null $filter You can use any `field_name` from this endpoint results as a
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
     * @return ResponseTicketsCollection Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listAllTicketsRelated(
        ?Page $page = null,
        ?Sort27 $sort = null,
        ?Filter11 $filter = null,
        ?array $expand = null
    ): ResponseTicketsCollection {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/tickets')
            ->auth('global')
            ->parameters(
                QueryParam::init('page', $page),
                QueryParam::init('sort', $sort),
                QueryParam::init('filter', $filter),
                QueryParam::init('expand', $expand)->serializeBy([Expand38Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseTicketsCollection::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * View single ticket record
     *
     * @param string $ticketId A unique, system-generated identifier for the Ticket.
     * @param string[]|null $expand Most endpoints in the API have a way to retrieve extra data
     *        related to the current record being retrieved. For example, if the API request is
     *        for the accountvaults endpoint, and the end user also needs to know which contact
     *        the token belongs to, this data can be returned in the accountvaults endpoint
     *        request.
     *
     * @return ResponseTicket Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function viewSingleTicketRecord(string $ticketId, ?array $expand = null): ResponseTicket
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/v1/tickets/{ticket_id}')
            ->auth('global')
            ->parameters(
                TemplateParam::init('ticket_id', $ticketId),
                QueryParam::init('expand', $expand)->serializeBy([Expand38Enum::class, 'checkValue'])
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized', Response401tokenException::class))
            ->type(ResponseTicket::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
