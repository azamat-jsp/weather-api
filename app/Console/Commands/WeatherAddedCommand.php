<?php

namespace App\Console\Commands;

use App\Services\Issue\GetWeatherAction;
use Illuminate\Console\Command;

class WeatherAddedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'weather:add {day} {token}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Weather added every hour';

    /**
     * Execute the console command.
     *
     * @param GetWeatherAction $action
     */
    public function handle(GetWeatherAction $action)
    {
        $day = $this->argument('day');
        $token = $this->argument('token');

        $result = $action($day, $token);
        $this->info($result);
    }
}
