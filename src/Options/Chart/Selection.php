<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ChartSelectionType;

class Selection extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.selection'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function type(ChartSelectionType $value): static
    {
        return $this->setOption('type', $value);
    }

    public function fillColor(string $value): static
    {
        return $this->setOption('fill.color', $value);
    }

    public function fillOpacity(float $value): static
    {
        return $this->setOption('fill.opacity', $value);
    }

    public function strokeWidth(int $value): static
    {
        return $this->setOption('stroke.width', $value);
    }

    public function strokeDashArray(int $value): static
    {
        return $this->setOption('stroke.dashArray', $value);
    }

    public function strokeColor(string $value): static
    {
        return $this->setOption('stroke.color', $value);
    }

    public function strokeOpacity(float $value): static
    {
        return $this->setOption('stroke.opacity', $value);
    }

    public function xAxisMin(int $value): static
    {
        return $this->setOption('xaxis.min', $value);
    }

    public function xAxisMax(int $value): static
    {
        return $this->setOption('xaxis.max', $value);
    }

    public function yAxisMin(int $value): static
    {
        return $this->setOption('yaxis.min', $value);
    }

    public function yAxisMax(int $value): static
    {
        return $this->setOption('yaxis.max', $value);
    }
}