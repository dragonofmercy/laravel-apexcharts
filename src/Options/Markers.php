<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\MarkerShape;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Str;

class Markers extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.markers'));
        parent::__construct($options);
    }

    public function size(int|array $value): static
    {
        return $this->setOption('size', $value);
    }

    public function colors(string|array $value): static
    {
        return $this->setOption('colors', $value);
    }

    public function strokeColors(string|array $value): static
    {
        return $this->setOption('strokeColors', $value);
    }

    public function strokeWidth(int|array $value): static
    {
        return $this->setOption('strokeWidth', $value);
    }

    public function strokeOpacity(float|array $value): static
    {
        return $this->setOption('strokeOpacity', $value);
    }

    public function strokeDashArray(int|array $value): static
    {
        return $this->setOption('strokeDashArray', $value);
    }

    public function fillOpacity(float|array $value): static
    {
        return $this->setOption('fillOpacity', $value);
    }

    public function discrete(array $value): static
    {
        return $this->setOption('discrete', $value);
    }

    public function shape(MarkerShape|array $value): static
    {
        return $this->setOption('shape', $value);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function onClick(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(e){ $value }";
        }

        return $this->setOption('onClick', new Raw($value));
    }

    public function onDblClick(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(e){ $value }";
        }

        return $this->setOption('onDblClick', new Raw($value));
    }

    public function showNullDataPoints(bool $value = true): static
    {
        return $this->setOption('showNullDataPoints', $value);
    }

    public function hoverSize(int $value): static
    {
        return $this->setOption('hover.size', $value);
    }

    public function hoverSizeOffset(int $value): static
    {
        return $this->setOption('hover.sizeOffset', $value);
    }
}