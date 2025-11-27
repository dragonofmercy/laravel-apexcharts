<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsMapAbstract;
use ApexCharts\Enums\ChartType;

class Heatmap extends PlotOptionsMapAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.heatmap'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::Heatmap;
    }

    public function radius(int $value): static
    {
        return $this->setOption('radius', $value);
    }
}