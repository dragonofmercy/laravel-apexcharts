<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\ChartType;

class Radar extends PlotOptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radar'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::Radar;
    }

    public function size(float $value): static
    {
        return $this->setOption('size', $value);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function polygonsStrokeColors(string|array $value): static
    {
        return $this->setOption('polygons.strokeColors', $value);
    }

    public function polygonsStrokeWidth(float $value): static
    {
        return $this->setOption('polygons.strokeWidth', $value);
    }

    public function polygonsConnectorColors(string|array $value): static
    {
        return $this->setOption('polygons.connectorColors', $value);
    }

    public function fillColors(string|array $value): static
    {
        return $this->setOption('fill.colors', $value);
    }
}