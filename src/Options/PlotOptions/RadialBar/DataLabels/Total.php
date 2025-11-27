<?php

namespace ApexCharts\Options\PlotOptions\RadialBar\DataLabels;

use ApexCharts\Abstracts\Options\PlotOptionsDataLabelsTypeAbstract;
use Illuminate\Support\Str;

class Total extends PlotOptionsDataLabelsTypeAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radialBar.dataLabels.total'));
        parent::__construct($options);
    }

    public function label(string $value): static
    {
        return $this->setOption('label', $value);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(w){ $value }";
        }

        return $this->setOption('formatter', $value);
    }
}