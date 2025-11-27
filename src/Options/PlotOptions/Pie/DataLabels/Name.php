<?php

namespace ApexCharts\Options\PlotOptions\Pie\DataLabels;

use ApexCharts\Options\PlotOptions\Map\DataLabels\Name as MapName;
use Illuminate\Support\Str;

class Name extends MapName
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.pie.dataLabels.name'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(val){ $value }";
        }

        return $this->setOption('formatter', $value);
    }
}