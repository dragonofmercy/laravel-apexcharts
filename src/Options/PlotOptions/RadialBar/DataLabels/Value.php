<?php

namespace ApexCharts\Options\PlotOptions\RadialBar\DataLabels;

use ApexCharts\Abstracts\Options\PlotOptionsDataLabelsTypeAbstract;
use Illuminate\Support\Str;

class Value extends PlotOptionsDataLabelsTypeAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radialBar.dataLabels.value'));
        parent::__construct($options);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(val){ $value }";
        }

        return $this->setOption('formatter', $value);
    }
}