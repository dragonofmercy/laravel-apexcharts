<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

class DropShadowAbstract extends OptionsAbstract
{
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
}