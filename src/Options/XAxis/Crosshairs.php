<?php

namespace ApexCharts\Options\XAxis;

use ApexCharts\Abstracts\Options\AxisCrosshairsAbstract;
use ApexCharts\Enums\CrosshairsFillType;
use ApexCharts\Options\XAxis\Crosshairs\DropShadow;
use ApexCharts\Options\XAxis\Crosshairs\FillGradient;

class Crosshairs extends AxisCrosshairsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis.crosshairs'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function width(int $value): static
    {
        return $this->setOption('width', $value);
    }

    public function opacity(float $value): static
    {
        return $this->setOption('opacity', $value);
    }

    public function fillType(CrosshairsFillType $value): static
    {
        return $this->setOption('fill.type', $value);
    }

    public function fillColor(string $value): static
    {
        return $this->setOption('fill.color', $value);
    }

    public function fillGradient(FillGradient $value): static
    {
        return $this->setOption('fill.gradient', $value);
    }

    public function dropShadow(bool|DropShadow $value)
    {
        if(is_bool($value)){
            return $this->setOption('dropShadow.enabled', $value);
        } else {
            return $this->setOption('dropShadow', $value);
        }
    }
}