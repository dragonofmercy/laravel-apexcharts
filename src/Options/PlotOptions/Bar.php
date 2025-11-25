<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\ChartType;

class Bar extends PlotOptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.bar'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::Bar;
    }

    public function columnWidth(string|int $value): static
    {
        return $this->setOption('columnWidth', $value);
    }
}