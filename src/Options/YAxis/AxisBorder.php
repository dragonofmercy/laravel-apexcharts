<?php

namespace ApexCharts\Options\YAxis;

use ApexCharts\Abstracts\Options\AxisBorderAbstract;

class AxisBorder extends AxisBorderAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.yaxis.axisBorder'));
        $this->setOption('show', true);
        parent::__construct($options);
    }
}