<?php

namespace ApexCharts\Options\Fill;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\Shade;
use ApexCharts\Enums\GradientType;

class Gradient extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.fill.gradient'));
        parent::__construct($options);
    }

    public function shade(Shade $value): static
    {
        return $this->setOption('shade', $value);
    }

    public function type(GradientType $value): static
    {
        return $this->setOption('shade', $value);
    }

    public function shadeIntensity(float $value): static
    {
        return $this->setOption('shadeIntensity', $value);
    }

    public function gradientToColors(array $value): static
    {
        return $this->setOption('gradientToColors', $value);
    }

    public function inverseColors(bool $value): static
    {
        return $this->setOption('inverseColors', $value);
    }

    public function opacityFrom(float|array $value): static
    {
        return $this->setOption('opacityFrom', is_float($value) ? [$value] : $value);
    }

    public function opacityTo(float|array $value): static
    {
        return $this->setOption('opacityTo', is_float($value) ? [$value] : $value);
    }

    public function stops(array $value): static
    {
        return $this->setOption('stops', $value);
    }

    public function colorStops(array $value): static
    {
        return $this->setOption('colorStops', $value);
    }
}