<?php

namespace ApexCharts\Options\Annotations;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\MarkerShape;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Str;

class Point extends OptionsAbstract
{
    public function x(mixed $value): static
    {
        return $this->setOption('x', $value);
    }

    public function y(mixed $value): static
    {
        return $this->setOption('y', $value);
    }

    public function yAxisIndex(int $value): static
    {
        return $this->setOption('yAxisIndex', $value);
    }

    public function seriesIndex(int $value): static
    {
        return $this->setOption('seriesIndex', $value);
    }

    public function mouseEnter(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(e){ $value }";
        }

        return $this->setOption('mouseEnter', new Raw($value));
    }

    public function mouseLeave(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(e){ $value }";
        }

        return $this->setOption('mouseLeave', new Raw($value));
    }

    public function click(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(e){ $value }";
        }

        return $this->setOption('click', new Raw($value));
    }

    public function markerSize(int $value): static
    {
        return $this->setOption('marker.size', $value);
    }

    public function markerFillColor(string $value): static
    {
        return $this->setOption('marker.fillColor', $value);
    }

    public function markerStrokeColor(string $value): static
    {
        return $this->setOption('marker.strokeColor', $value);
    }

    public function markerStrokeWidth(int $value): static
    {
        return $this->setOption('marker.strokeWidth', $value);
    }

    public function markerShape(MarkerShape $value): static
    {
        return $this->setOption('marker.shape', $value);
    }

    public function markerRadius(int $value): static
    {
        return $this->setOption('marker.radius', $value);
    }

    public function markerOffsetX(float $value): static
    {
        return $this->setOption('marker.offsetX', $value);
    }

    public function markerOffsetY(float $value): static
    {
        return $this->setOption('marker.offsetY', $value);
    }

    public function markerCssClass(string $value): static
    {
        return $this->setOption('marker.cssClass', $value);
    }

    public function imagePath(string $value): static
    {
        return $this->setOption('image.path', $value);
    }

    public function imageWidth(int $value): static
    {
        return $this->setOption('image.width', $value);
    }

    public function imageHeight(int $value): static
    {
        return $this->setOption('image.height', $value);
    }

    public function imageOffsetX(float $value): static
    {
        return $this->setOption('image.offsetX', $value);
    }

    public function imageOffsetY(float $value): static
    {
        return $this->setOption('image.offsetY', $value);
    }

    public function labelPadding(?float $top = null, ?float $left = null, ?float $bottom = null, ?float $right = null): static
    {
        foreach(compact('top', 'left', 'bottom', 'right') as $name => $value){
            if(null !== $value){
                $this->setOption('padding.' . ucfirst($name), $value);
            }
        }

        return $this;
    }
}