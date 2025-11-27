<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\ChartType;

class BoxPlot extends PlotOptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.boxPlot'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::BoxPlot;
    }

    public function colorUpper(string $color): static
    {
        return $this->setOption('colors.upper', $color);
    }

    public function colorLower(string $color): static
    {
        return $this->setOption('colors.lower', $color);
    }
}