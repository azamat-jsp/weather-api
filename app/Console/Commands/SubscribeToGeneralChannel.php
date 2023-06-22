<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class SubscribeToGeneralChannel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redis:subscribe-general';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Subscribe to general channel';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        echo 'work without redis';
        //general is the name of channel to subscribe to
//        Redis::subscribe(['general'], function ($message) {
//            //message in here is the data strring sent/publish from nodejs
//            $messageArray = json_decode($message, true);
//            //convert to php associative array
//            //lets echo the message we receive from node
//            echo $message;
//
//        });
    }
}
