<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\ChartType;

class Line extends PlotOptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.line'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::Line;
    }

    public function isSlopChart(bool $value = true): static
    {
        return $this->setOption('isSlopChart', $value);
    }

    public function colorThreshold(int $value): static
    {
        return $this->setOption('colors.threshold', $value);
    }

    public function colorAboveThreshold(string $value): static
    {
        return $this->setOption('colors.colorAboveThreshold', $value);
    }

    public function colorBelowThreshold(string $value): static
    {
        return $this->setOption('colors.colorBelowThreshold', $value);
    }
}