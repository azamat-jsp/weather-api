<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CookRequest;
use App\Services\CookService;
use Illuminate\Support\Collection;

class CookController extends Controller
{
    public function __construct()
    {
    }

    public function index(CookRequest $request, CookService $service): Collection
    {
        return $service($request->validated());
    }
}
