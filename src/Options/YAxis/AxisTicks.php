<?php

namespace ApexCharts\Options\YAxis;

use ApexCharts\Abstracts\Options\AxisTicksAbstract;

class AxisTicks extends AxisTicksAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.yaxis.axisTicks'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function width(int $value): static
    {
        return $this->setOption('width', $value);
    }
}