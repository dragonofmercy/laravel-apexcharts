<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\Layer;

abstract class AxisCrosshairsAbstract extends OptionsAbstract
{
    public function position(Layer $value): static
    {
        return $this->setOption('position', $value);
    }

    public function strokeColor(string $value): static
    {
        return $this->setOption('stroke.color', $value);
    }

    public function strokeWidth(int $value): static
    {
        return $this->setOption('stroke.width', $value);
    }

    public function strokeDashArray(int $value): static
    {
        return $this->setOption('stroke.dashArray', $value);
    }
}