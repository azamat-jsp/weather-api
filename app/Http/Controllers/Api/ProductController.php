<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Builder\Director;
use App\Services\Builder\GetProductListAction;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function index(GetProductListAction $action): JsonResponse
    {
        $director = new Director();

        return $action($director);
    }
}
