# laravel-apexcharts

[![](https://img.shields.io/static/v1?label=laravel&message=%E2%89%A512.0&color=0078BE&logo=laravel&style=flat)](https://packagist.org/packages/dragonofmercy/laravel-apexcharts)
[![](https://img.shields.io/packagist/dt/dragonofmercy/laravel-apexcharts)](https://packagist.org/packages/dragonofmercy/laravel-apexcharts)
[![](https://img.shields.io/packagist/v/dragonofmercy/laravel-apexcharts)](https://packagist.org/packages/dragonofmercy/laravel-apexcharts)
[![](https://img.shields.io/github/license/dragonofmercy/laravel-apexcharts)](https://github.com/dragonofmercy/laravel-apexcharts/blob/main/LICENSE)

A powerful and flexible ApexCharts wrapper package for Laravel 12, providing an elegant PHP API to build beautiful, interactive charts in your Laravel applications.

## Features

- 🎨 Full ApexCharts API support with fluent PHP interface
- 📊 Support for all chart types (Line, Bar, Area, Pie, Donut, Radar, and more)
- 🌍 Built-in internationalization with 50+ locales
- 🎯 Type-safe enums for chart options
- 🔧 Highly configurable with sensible defaults
- 💪 PHP 8.2+ with modern type declarations
- 🚀 Easy integration with Blade templates

## Requirements

- PHP 8.2 or higher
- Laravel 12.0 or higher

## Getting Started

### 1. Install the package

````bash
composer require dragonofmercy/laravel-apexcharts
````

### 2. Publish assets

````bash
php artisan vendor:publish --tag=apexcharts
````

### 3. Configure

You can change the chart settings of your app from `config/apexcharts.php` file

## Usage example

```php
use ApexCharts\Builder;
use ApexCharts\Options\Chart;
use ApexCharts\Options\Serie;
use ApexCharts\Enums\ChartType;

$options = (new Builder())
    ->chart(Chart::make()->type(ChartType::Line)->height(350))
    ->labels(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']);
    ->serie(Serie::make()->name('Sales')->data([30, 40, 35, 50, 49, 60]))
    ->toJson();
```

## Implementation Status

- ✅ annotations
- ✅ chart
- ✅ colors
- ✅ dataLabels
- ✅ fill
- ✅ forecastDataPoints
- ✅ grid
- ✅ labels
- ✅ legend
- ✅ markers
- ✅ noData
- ✅ plotOptions
- ✅ responsive
- ✅ series
- ✅ states
- ✅ stroke
- ✅ theme
- ✅ title
- ✅ subtitle
- ✅ tooltip
- ✅ xaxis
- ✅ yaxis

### Additional Features

- ✅ Chart auto brush

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).

## Support

If this project helps to increase your productivity, you can give me a cup of coffee :)

<a href="https://ko-fi.com/dragonofmercy" target="_blank"><img src="https://cdn.ko-fi.com/cdn/kofi2.png?v=3" alt="Donate" width="160px" /></a>

## Credits

- Built on top of [ApexCharts.js](https://apexcharts.com/)
- Maintained by [DragonOfMercy](https://github.com/dragonofmercy)

## Links

- [ApexCharts Documentation](https://apexcharts.com/docs/)