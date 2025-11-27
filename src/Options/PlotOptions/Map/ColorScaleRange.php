<?php

namespace ApexCharts\Options\PlotOptions\Map;

use ApexCharts\Abstracts\OptionsAbstract;

class ColorScaleRange extends OptionsAbstract
{
    public function from(float $value): static
    {
        return $this->setOption('from', $value);
    }

    public function to(float $value): static
    {
        return $this->setOption('to', $value);
    }

    public function color(string $value): static
    {
        return $this->setOption('color', $value);
    }

    public function foreColor(string $value): static
    {
        return $this->setOption('foreColor', $value);
    }

    public function name(string $value): static
    {
        return $this->setOption('name', $value);
    }
}