<?php

namespace App\Services\V1;

use Illuminate\Http\Request;
use App\Services\ApiQuery;

class AttendeeQuery extends ApiQuery {
    protected $params = [
        'firstName' => ['eq', 'like'],
        'lastName' => ['eq', 'like'],
        'email' => ['eq', 'like'],
    ];

    protected $columnMap = [
        'firstName' => 'first_name',
        'lastName' => 'last_name',
    ];
}
