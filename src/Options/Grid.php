<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\Layer;
use ApexCharts\Options\Grid\Padding;
use Illuminate\Support\Arr;

class Grid extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.grid'));
        parent::__construct($options);
    }

    public function borderColor(string $value): static
    {
        return $this->setOption('borderColor', $value);
    }

    public function strokeDashArray(float|array $value): static
    {
        return $this->setOption('strokeDashArray', $value);
    }

    public function position(Layer $value): static
    {
        return $this->setOption('position', $value);
    }

    public function xAxis(bool $value = true): static
    {
        return $this->setOption('xaxis.lines.show', $value);
    }

    public function yAxis(bool $value = true): static
    {
        return $this->setOption('yaxis.lines.show', $value);
    }

    public function rowColors(string|array $value): static
    {
        return $this->setOption('row.colors', is_string($value) ? [$value] : $value);
    }

    public function rowOpacity(float $value): static
    {
        return $this->setOption('row.opacity', $value);
    }

    public function columnColors(string|array $value): static
    {
        return $this->setOption('column.colors', is_string($value) ? [$value] : $value);
    }

    public function columnOpacity(float $value): static
    {
        return $this->setOption('column.opacity', $value);
    }

    public function padding(?float $top = null, ?float $left = null, ?float $bottom = null, ?float $right = null): static
    {
        foreach(compact('top', 'left', 'bottom', 'right') as $name => $value){
            if(null !== $value){
                $this->setOption('padding.' . $name, $value);
            }
        }

        return $this;
    }
}