<?php

namespace ApexCharts\Options\PlotOptions\RadialBar;

use ApexCharts\Abstracts\OptionsAbstract;
use Illuminate\Support\Str;

class BarLabels extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radialBar.barLabels'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function useSeriesColors(bool $value = true): static
    {
        return $this->setOption('useSeriesColors', $value);
    }

    public function fontSize(string $value): static
    {
        return $this->setOption('fontSize', $value);
    }

    public function fontFamily(string $value): static
    {
        return $this->setOption('fontFamily', $value);
    }

    public function fontWeight(string|int $value): static
    {
        return $this->setOption('fontWeight', $value);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(val){ $value }";
        }

        return $this->setOption('formatter', $value);
    }

    public function onClick(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(e){ $value }";
        }

        return $this->setOption('onClick', $value);
    }
}