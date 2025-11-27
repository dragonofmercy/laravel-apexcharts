<?php

namespace ApexCharts\Options\PlotOptions\RadialBar\DataLabels;

use ApexCharts\Options\PlotOptions\Map\DataLabels\Total as MapTotal;

class Total extends MapTotal
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radialBar.dataLabels.total'));
        $this->setOption('show', true);
        parent::__construct($options);
    }
}