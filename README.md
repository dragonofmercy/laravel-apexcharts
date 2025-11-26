# laravel-apexcharts

> [!WARNING]  
> This package is in heavy development and is not yet ready for production use.

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

- [ ] annotations
- [x] chart
- [x] colors
- [x] dataLabels
- [x] fill
- [x] forecastDataPoints
- [x] grid
- [x] labels
- [x] legend
- [x] markers
- [x] noData
- [ ] plotOptions
- [ ] responsive
- [x] series
- [x] states
- [x] stroke
- [x] theme
- [x] title
- [x] subtitle
- [x] tooltip
- [x] xaxis
- [x] yaxis

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