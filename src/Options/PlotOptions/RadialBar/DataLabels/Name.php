<?php

namespace ApexCharts\Options\PlotOptions\RadialBar\DataLabels;

use ApexCharts\Abstracts\Options\PlotOptionsDataLabelsTypeAbstract;

class Name extends PlotOptionsDataLabelsTypeAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radialBar.dataLabels.name'));
        parent::__construct($options);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }
}