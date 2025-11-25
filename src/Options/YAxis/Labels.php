<?php

namespace ApexCharts\Options\YAxis;

use ApexCharts\Abstracts\Options\AxisLabelsAbstract;

class Labels extends AxisLabelsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.yaxis.labels'));
        parent::__construct($options);
    }
}