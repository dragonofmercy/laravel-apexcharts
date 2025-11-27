<?php

namespace ApexCharts\Options\XAxis;

use ApexCharts\Abstracts\Options\AxisTicksAbstract;

class AxisTicks extends AxisTicksAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis.axisTicks'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function height(float $value): static
    {
        return $this->setOption('height', $value);
    }
}