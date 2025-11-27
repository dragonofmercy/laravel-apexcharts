<?php

namespace ApexCharts\Options\PlotOptions\RadialBar;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Options\PlotOptions\RadialBar\Track\DropShadow;

class Track extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radialBar.track'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function startAngle(float $value): static
    {
        return $this->setOption('startAngle', $value);
    }

    public function endAngle(float $value): static
    {
        return $this->setOption('endAngle', $value);
    }

    public function background(string $value): static
    {
        return $this->setOption('background', $value);
    }

    public function strokeWidth(float $value): static
    {
        return $this->setOption('strokeWidth', $value);
    }

    public function opacity(float $value): static
    {
        return $this->setOption('opacity', $value);
    }

    public function margin(float $value): static
    {
        return $this->setOption('margin', $value);
    }

    public function dropShadow(DropShadow $value): static
    {
        return $this->setOption('dropShadow', $value);
    }
}