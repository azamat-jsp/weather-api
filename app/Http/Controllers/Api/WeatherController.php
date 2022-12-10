<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\Weather\GetWeatherAction;
use Symfony\Component\HttpFoundation\JsonResponse;

class WeatherController extends Controller
{
    public function getWeather(GetWeatherAction $action): JsonResponse
    {
        $day = \request()->input('day');
        $token = \request()->input('token');

        return $action($day, $token);
    }
}
