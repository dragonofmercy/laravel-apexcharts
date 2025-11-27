<?php

namespace ApexCharts\Options\XAxis;

use ApexCharts\Abstracts\Options\AxisBorderAbstract;

class AxisBorder extends AxisBorderAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis.axisBorder'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function height(float|string $value): static
    {
        return $this->setOption('height', $value);
    }

    public function width(float|string $value): static
    {
        return $this->setOption('width', $value);
    }
}