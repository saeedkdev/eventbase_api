<?php

namespace App\Services\V1;

use Illuminate\Http\Request;
use App\Services\ApiQuery;

class AgendaQuery extends ApiQuery {

    protected $params = [
        'attendeeID' => ['eq'],
        'title' => ['eq', 'like'],
        'createdAt' => ['gte', 'lte'],
    ];

    protected $columnMap = [
        'attendeeID' => 'attendie_id',
        'createdAt' => 'created_at'
    ];
}
