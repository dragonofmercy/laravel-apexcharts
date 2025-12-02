<?php

namespace ApexCharts\Options\PlotOptions\Map\DataLabels;

use ApexCharts\Abstracts\Options\PlotOptionsDataLabelsTypeAbstract;
use Illuminate\Support\Str;

class Value extends PlotOptionsDataLabelsTypeAbstract
{


    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(val){ $value }";
        }

        return $this->setOption('formatter', $value);
    }
}