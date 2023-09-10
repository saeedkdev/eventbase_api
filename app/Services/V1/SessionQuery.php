<?php

namespace App\Services\V1;

use Illuminate\Http\Request;
use App\Services\ApiQuery;

class SessionQuery extends ApiQuery {
    protected $params = [
        'title' => ['eq', 'like'],
        'description' => ['eq', 'like'],
        'start_time' => ['eq'],
        'end_time' => ['eq'],
        'date' => ['eq'],
        'speakers' => ['like'],
        'sessionType' => ['eq'],
    ];

    protected $columnMap = [
        'sessionType' => 'session_type',
        'startTime' => 'start_time',
        'endTime' => 'end_time',
    ];
}
