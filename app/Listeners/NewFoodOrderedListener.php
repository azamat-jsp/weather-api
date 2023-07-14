<?php

namespace App\Listeners;

use App\Events\NewFoodOrderedEvent;
use Illuminate\Support\Facades\Redis;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewFoodOrderedListener implements ShouldQueue
{

    public $connection = 'redis';

    public $delay = 5;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\NewFoodOrderedEvent  $event
     * @return void
     */
    public function handle(NewFoodOrderedEvent $event)
    {
        Redis::publish('general', 'eeww');
    }
}
