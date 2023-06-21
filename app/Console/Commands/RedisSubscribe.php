<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class RedisSubscribe extends Command
{
    /**
     * Имя и сигнатура консольной команды.
     *
     * @var string
     */
    protected $signature = 'redis:subscribe';

    /**
     * Описание консольной команды.
     *
     * @var string
     */
    protected $description = 'Subscribe to a Redis channel';

    /**
     * Выполнить консольную команду.
     *
     * @return mixed
     */
    public function handle()
    {
//        Redis::subscribe(['test-channel'], function ($message) {
//            Log::channel('stderr')->info($message);
//        });

        Redis::psubscribe(['*'], function ($message, $channel) {
            Log::channel('stderr')->info($message);
            Log::channel('stderr')->info($channel);
        });
    }
}
