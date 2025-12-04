<?php

namespace ApexCharts\Options\PlotOptions\Map\DataLabels;

use ApexCharts\Abstracts\Options\PlotOptionsDataLabelsTypeAbstract;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Str;

class Total extends PlotOptionsDataLabelsTypeAbstract
{
    public function label(string $value): static
    {
        return $this->setOption('label', $value);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(w){ $value }";
        }

        return $this->setOption('formatter', new Raw($value));
    }
}