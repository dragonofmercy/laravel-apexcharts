<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\ChartType;

class PolarArea extends PlotOptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.polarArea'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::PolarArea;
    }

    public function ringsStrokeWidth(float $value): static
    {
        return $this->setOption('rings.strokeWidth', $value);
    }

    public function ringsStrokeColor(string $value): static
    {
        return $this->setOption('rings.strokeColor', $value);
    }

    public function spokesStrokeWidth(float $value): static
    {
        return $this->setOption('spokes.strokeWidth', $value);
    }

    public function spokesConnectorColors(string|array $value): static
    {
        return $this->setOption('spokes.connectorColors', $value);
    }
}