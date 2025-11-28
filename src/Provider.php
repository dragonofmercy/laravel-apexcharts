<?php

namespace ApexCharts;

use Illuminate\Support\ServiceProvider;

class Provider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/apexcharts.php', 'apexcharts');
    }

    public function boot(): void
    {
        if(app()->runningInConsole()){
            $this->publishes([
                __DIR__ . '/../config/apexcharts.php' => $this->app->configPath('apexcharts.php')
            ], 'apexcharts');
        }
    }
}