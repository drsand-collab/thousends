<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SimpleOperation;
use Symfony\Component\HttpFoundation\Response;

class ThousandOperationDataController extends Controller
{
    protected int $limit;

    public function __construct(protected SimpleOperation $simpleOperation)
    {
    }

    public function index(): Response
    {
        $start = \request()->has('start') ? \request('start') : 0;

        $response = [
            'start' => (int)$start,
            'offset' => (int)$this->simpleOperation->getChunk(),
            'count' => count($this->simpleOperation->getListData($start)),
            'data' => $this->simpleOperation->getListData($start)
        ];

        return response()->json($response, 200);
    }
}
