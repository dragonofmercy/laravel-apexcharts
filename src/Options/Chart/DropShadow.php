<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\Options\DropShadowAbstract;

class DropShadow extends DropShadowAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.dropShadow'));
        $this->setOption('enabled', true);

        parent::__construct($options);
    }

    public function color(string|array $value): static
    {
        return $this->setOption('color', $value);
    }

    public function enabledOnSeries(int|array $value): static
    {
        return $this->setOption('enabledOnSeries', is_int($value) ? [$value] : $value);
    }
}