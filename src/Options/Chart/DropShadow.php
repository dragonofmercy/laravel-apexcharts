<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;

class DropShadow extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.dropShadow'));
        $this->setOption('enabled', true);

        parent::__construct($options);
    }

    public function top(int $value): static
    {
        return $this->setOption('top', $value);
    }

    public function left(int $value): static
    {
        return $this->setOption('left', $value);
    }

    public function blur(int $value): static
    {
        return $this->setOption('blur', $value);
    }

    public function opacity(float $value): static
    {
        return $this->setOption('opacity', $value);
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