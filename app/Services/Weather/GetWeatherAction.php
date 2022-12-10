<?php

namespace App\Services\Weather;

use App\Models\Weather;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Support\Facades\Http;

class GetWeatherAction
{
    public function __invoke($day, $token): JsonResponse
    {
        $params = ['day' => $day, 'token' => $token];

        $validator = Validator::make($params, [
            'day' => 'required|date_format:Y-m-d',
            'token' => 'required|string|min:1|max:1',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $url = env('WEATHER_URL');
        $lat = env('WEATHER_LAT');
        $lon = env('WEATHER_LON');
        $units = env('WEATHER_UNITS');
        $appid = env('WEATHER_APPID');

        $response = Http::get($url, [
            'appid' => $appid,
            'lat' => $lat,
            'lon' => $lon,
            'units' => $units,
            'dt' => strtotime($day),
        ]);

        self::insertWeatherData($response->collect());

        return response()->json($response->collect());
    }

    /**
     * @param Collection $response
     * @return void
     */
    private static function insertWeatherData(Collection $response): void
    {
        if ($response->has('main')) {
            $weather = $response->get('main');
            Weather::create($weather);
        } else {
            logger($response);
        }
    }
}
