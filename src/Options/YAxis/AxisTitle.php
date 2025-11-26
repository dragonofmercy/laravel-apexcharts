<?php

namespace ApexCharts\Options\YAxis;

use ApexCharts\Abstracts\Options\AxisTitleAbstract;

class AxisTitle extends AxisTitleAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.yaxis.title'));
        parent::__construct($options);
    }

    public function rotate(int $value): static
    {
        return $this->setOption('rotate', $value);
    }
}