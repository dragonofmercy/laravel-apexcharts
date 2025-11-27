<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Options\PlotOptions\Map\ColorScaleRange;

abstract class PlotOptionsMapAbstract extends PlotOptionsAbstract
{
    public function enableShades(bool $value = true): static
    {
        return $this->setOption('enableShades', $value);
    }

    public function shadeIntensity(float $value): static
    {
        return $this->setOption('shadeIntensity', $value);
    }

    public function reverseNegativeShade(bool $value = true): static
    {
        return $this->setOption('reverseNegativeShade', $value);
    }

    public function distributed(bool $value = true): static
    {
        return $this->setOption('distributed', $value);
    }

    public function useFillColorAsStroke(bool $value = true): static
    {
        return $this->setOption('useFillColorAsStroke', $value);
    }

    public function colorScaleInverse(bool $value = true): static
    {
        return $this->setOption('colorScale.inverse', $value);
    }

    public function colorScaleMin(float $value): static
    {
        return $this->setOption('colorScale.min', $value);
    }

    public function colorScaleMax(float $value): static
    {
        return $this->setOption('colorScale.max', $value);
    }

    /**
     * @param array<ColorScaleRange|array> $value
     * @return $this
     */
    public function colorScaleRanges(array $value): static
    {
        foreach($value as $v){
            if($value instanceof ColorScaleRange){
                $this->setOption('colorScale.ranges', $v, true);
            } elseif(is_array($v)) {
                $this->setOption('colorScale.ranges', ColorScaleRange::make($v), true);
            }
        }

        return $this;
    }
}