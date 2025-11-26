<?php

namespace ApexCharts\Options\XAxis;

use ApexCharts\Abstracts\Options\AxisTitleAbstract;

class AxisTitle extends AxisTitleAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis.title'));
        parent::__construct($options);
    }
}