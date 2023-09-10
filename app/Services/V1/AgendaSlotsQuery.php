<?php

namespace App\Services\V1;

use App\Services\ApiQuery;

class AgendaSlotsQuery extends ApiQuery {

    protected $params = [
        'agendaID' => ['eq'],
        'sessionID' => ['eq'],
        'startTime' => ['gte', 'lte'],
        'endTime' => ['gte', 'lte'],
        'date' => ['gte', 'lte'],
    ];

    protected $columnMap = [
        'agendaID' => 'agenda_id',
        'sessionID' => 'session_id',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
    ];
}
