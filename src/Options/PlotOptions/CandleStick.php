<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\ChartType;

class CandleStick extends PlotOptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.candlestick'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::Candlestick;
    }

    public function colorUpward(string $color): static
    {
        return $this->setOption('colors.upward', $color);
    }

    public function colorDownward(string $color): static
    {
        return $this->setOption('colors.downward', $color);
    }

    public function wickUseFillColor(bool $value = true): static
    {
        return $this->setOption('wick.useFillColor', $value);
    }
}