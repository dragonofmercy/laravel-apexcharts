<?php

namespace ApexCharts\Options\PlotOptions\Pie\DataLabels;

use ApexCharts\Options\PlotOptions\Map\DataLabels\Value as MapValue;

class Value extends MapValue
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.pie.dataLabels.value'));
        $this->setOption('show', true);
        parent::__construct($options);
    }
}