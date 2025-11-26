<?php

namespace ApexCharts\Options\XAxis\Crosshairs;

use ApexCharts\Abstracts\OptionsAbstract;

class FillGradient extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis.crosshairs.fill.gradient'));
        parent::__construct($options);
    }

    public function colorFrom(string $value): static
    {
        return $this->setOption('colorFrom', $value);
    }

    public function colorTo(string $value): static
    {
        return $this->setOption('colorTo', $value);
    }

    public function stops(array $value): static
    {
        return $this->setOption('stops', $value);
    }

    public function opacityFrom(float $value): static
    {
        return $this->setOption('opacityFrom', $value);
    }

    public function opacityTo(float $value): static
    {
        return $this->setOption('opacityTo', $value);
    }
}