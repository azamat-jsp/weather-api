<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Weather;
use Illuminate\Support\Facades\Redis;

class WeatherController extends Controller
{
    public function show(Weather $weather)
    {
        return $weather;
    }
}
