<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\BorderType;

abstract class AxisTicksAbstract extends OptionsAbstract
{
    public function borderType(BorderType $value): static
    {
        return $this->setOption('borderType', $value);
    }

    public function color(string $value): static
    {
        return $this->setOption('color', $value);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }
}