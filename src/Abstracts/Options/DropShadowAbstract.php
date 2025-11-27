<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

abstract class DropShadowAbstract extends OptionsAbstract
{
    public function top(float $value): static
    {
        return $this->setOption('top', $value);
    }

    public function left(float $value): static
    {
        return $this->setOption('left', $value);
    }

    public function blur(float $value): static
    {
        return $this->setOption('blur', $value);
    }

    public function opacity(float $value): static
    {
        return $this->setOption('opacity', $value);
    }
}