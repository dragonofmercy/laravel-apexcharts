<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

class ForecastDataPoints extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.forecastDataPoints'));
        parent::__construct($options);
    }

    public function count(int $value): static
    {
        return $this->setOption('count', $value);
    }

    public function fillOpacity(float $value): static
    {
        return $this->setOption('fillOpacity', $value);
    }

    public function strokeWidth(int $value): static
    {
        return $this->setOption('strokeWidth', $value);
    }

    public function dashArray(int $value): static
    {
        return $this->setOption('dashArray', $value);
    }
}