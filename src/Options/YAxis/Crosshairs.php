<?php

namespace ApexCharts\Options\YAxis;

use ApexCharts\Abstracts\Options\AxisCrosshairsAbstract;

class Crosshairs extends AxisCrosshairsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.yaxis.crosshairs'));
        $this->setOption('show', true);
        parent::__construct($options);
    }
}