<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\ChartType;
use ApexCharts\Enums\FillTo;

class Area extends PlotOptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.area'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::Area;
    }

    public function fillTo(FillTo $value): static
    {
        return $this->setOption('fillTo', $value);
    }
}