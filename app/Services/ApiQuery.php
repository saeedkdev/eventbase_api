<?php

namespace App\Services;

use Illuminate\Http\Request;

class ApiQuery {

    protected $params = [];

    protected $columnMap = [];

    protected $operators = [
        'eq' => '=',
        'ne' => '!=',
        'lt' => '<',
        'gt' => '>',
        'lte' => '<=',
        'gte' => '>=',
        'like' => 'LIKE',
    ];

    public function transform(Request $request) : array {
        $query = [];

        foreach($this->params as $param => $operators) {
            $value = $request->query($param);

            if(!isset($value)) {
                continue;
            }

            $column = $this->columnMap[$param] ?? $param;

            foreach($operators as $operator) {
                if(isset($value[$operator])) {
                    if($operator == 'like') {
                        $value[$operator] = "%{$value[$operator]}%";
                    }
                    $query[] = [$column, $this->operators[$operator], $value[$operator]];
                }
            }
        }

        return $query;
    }
}
