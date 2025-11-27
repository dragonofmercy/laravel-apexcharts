<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsMapAbstract;
use ApexCharts\Enums\ChartType;
use ApexCharts\Enums\DataLabelsFormat;

class Treemap extends PlotOptionsMapAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.treemap'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::Treemap;
    }

    public function dataLabelsFormat(DataLabelsFormat $value): static
    {
        return $this->setOption('dataLabels.format', $value);
    }
}