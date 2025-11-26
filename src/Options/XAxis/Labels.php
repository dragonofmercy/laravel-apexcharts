<?php

namespace ApexCharts\Options\XAxis;

use ApexCharts\Abstracts\Options\AxisLabelsAbstract;
use Illuminate\Support\Str;

class Labels extends AxisLabelsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis.labels'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(value, timestamp, opts){ $value }";
        }

        return parent::formatter($value);
    }

    public function rotateAlways(bool $value = true): static
    {
        return $this->setOption('rotateAlways', $value);
    }

    public function hideOverlappingLabels(bool $value = true): static
    {
        return $this->setOption('hideOverlappingLabels', $value);
    }

    public function trim(bool $value = true): static
    {
        return $this->setOption('trim', $value);
    }

    public function minHeight(float $value): static
    {
        return $this->setOption('minHeight', $value);
    }

    public function maxHeight(float $value): static
    {
        return $this->setOption('maxHeight', $value);
    }

    public function format(string $value): static
    {
        return $this->setOption('format', $value);
    }

    public function datetimeUTC(bool $value = true): static
    {
        return $this->setOption('datetimeUTC', $value);
    }

    public function datetimeFormatter(
        string $year = 'yyyy',
        string $month = "MMM 'yy",
        string $day = 'dd MMM',
        string $hour = 'HH:mm',
        string $minute = 'HH:mm:ss',
        string $second = 'HH:mm:ss'
    ): static
    {
        return $this->setOption('datetimeFormatter', [
            'year' => $year,
            'month' => $month,
            'day' => $day,
            'hour' => $hour,
            'minute' => $minute,
            'second' => $second
        ]);
    }
}