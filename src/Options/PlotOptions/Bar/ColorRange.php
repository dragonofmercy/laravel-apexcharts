<?php

namespace ApexCharts\Options\PlotOptions\Bar;

use ApexCharts\Abstracts\OptionsAbstract;

class ColorRange extends OptionsAbstract
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
}