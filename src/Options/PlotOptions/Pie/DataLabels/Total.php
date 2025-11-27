<?php

namespace ApexCharts\Options\PlotOptions\Pie\DataLabels;

use ApexCharts\Options\PlotOptions\Map\DataLabels\Total as MapTotal;

class Total extends MapTotal
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.pie.dataLabels.total'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function showAlways(bool $show = true): static
    {
        return $this->setOption('showAlways', $show);
    }
}