<?php

namespace ApexCharts\Options\YAxis;

use ApexCharts\Abstracts\Options\AxisLabelsAbstract;
use ApexCharts\Enums\HorizontalAlign;
use Illuminate\Support\Str;

class Labels extends AxisLabelsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.yaxis.labels'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith($value, 'function(')){
            $value = "function(val, index){ $value }";
        }

        return parent::formatter($value);
    }

    public function Align(HorizontalAlign $value): static
    {
        return $this->setOption('align', $value);
    }

    public function minWidth(float $value): static
    {
        return $this->setOption('minWidth', $value);
    }

    public function maxWidth(float $value): static
    {
        return $this->setOption('maxWidth', $value);
    }
}