<?php


namespace App\Http\Controllers\Api;

use App\Events\NewFoodOrderedEvent;
use App\Http\Controllers\Controller;

class PublishController extends Controller
{
    public function publish()
    {
        $order = [
            'id' => 5,
            'type' => 'User',
            'status' => 'success'
        ];
        $payload = ['type' => 'NewOrder','order' => $order];
        event(new NewFoodOrderedEvent($payload));
    }
}
