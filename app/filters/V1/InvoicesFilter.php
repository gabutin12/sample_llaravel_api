<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class InvoicesFilter extends ApiFilter {

    protected $safeParams = [
        'customerId' => ['eq'],
        'amount' => ['eq', 'lt' , 'gt' , 'gte', 'lte' ],
        'status' => ['eq', 'ne'],
        'billedDate' => ['eq', 'lt' , 'gt' , 'gte', 'lte' ],
        'paidDate' => ['eq', 'lt' , 'gt' , 'gte', 'lte' ],
    ];

    protected $columnMap = [
        'customerId' => 'customerId',
        'billedDate' => 'billedDate',
        'paidDate' => 'paidDate',
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gt' => '>',
        'gte' => '≥',
        'ne' => '≠',
    ];

    // public function transform(Request $request){
    //     $eloQuery = [];

    //     foreach ($this->safeParams as $parm => $operators){
    //         $query = $request->query($parm);

    //         if (!isset($query)){
    //             continue;
    //         }

    //         $column = $this->columnMap[$parm] ?? $parm;

    //         foreach ($operators as $operator){
    //             if (isset($query[$operator])){
    //                 $eloQuery[] = [$column, $this->operatorMap[$operator], $query[$operator]];
    //             }
    //         }
    //     }
    //     return $eloQuery;
    // }

}