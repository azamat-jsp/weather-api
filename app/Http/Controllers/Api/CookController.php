<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Cook\MealAction;

class CookController extends Controller
{
    public function index(MealAction $action): void
    {
        $action();
    }
}
