<?php

namespace App\Providers;

use App\Interfaces\PDFGenerator;
use App\Services\PDF\SilkyWayPDFGenerator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(PDFGenerator::class, SilkyWayPDFGenerator::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
