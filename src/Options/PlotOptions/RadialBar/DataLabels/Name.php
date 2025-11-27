<?php

namespace ApexCharts\Options\PlotOptions\RadialBar\DataLabels;

use ApexCharts\Options\PlotOptions\Map\DataLabels\Name as MapName;

class Name extends MapName
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radialBar.dataLabels.name'));
        $this->setOption('show', true);
        parent::__construct($options);
    }
}