<?php
return [

    /*
   |--------------------------------------------------------------------------
   | ApexCharts Default Options
   |--------------------------------------------------------------------------
   |
   | Here you may define the default options that will be applied to all
   | ApexCharts rendered using this package. To learn more about each
   | available option, check the official ApexCharts documentation.
   |
   | https://apexcharts.com/docs/options/
   |
   */

    'options' => [
        'chart' => [
            'fontFamily' => 'inherit',
            'defaultLocale' => 'auto',
            'animations' => [
                'enabled' => false,
            ],
            'toolbar' => [
                'show' => false,
            ],
            'zoom' => [
                'enabled' => false,
            ],
        ],
        'dataLabels' => [
            'enabled' => false,
        ],
        'legend' => [
            'show' => false,
        ],
        'series' => [],
    ]

];