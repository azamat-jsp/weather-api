<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Weather;
use Illuminate\Support\Facades\Redis;

class WeatherController extends Controller
{
    public function show(Weather $weather)
    {
        $redis = Redis::connection();

        $redis->set('user_details', json_encode([
                'first_name' => 'Alex',
                'last_name' => 'Richards'
            ])
        );

        Redis::set('company', 'Webkul');
        $user = Redis::get('company');


        $response = $redis->get('user_details');
        dd($response, $user);

        return $response;
    }
}
