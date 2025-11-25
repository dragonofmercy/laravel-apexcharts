<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ChartZoomType;

class Zoom extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.zoom'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function type(ChartZoomType $type): static
    {
        return $this->setOption('type', $type);
    }

    public function autoScaleYaxis(bool $value): static
    {
        return $this->setOption('autoScaleYaxis', $value);
    }

    public function allowMouseWheelZoom(bool $value): static
    {
        return $this->setOption('allowMouseWheelZoom', $value);
    }

    public function zoomedAreaFillColor(string $value): static
    {
        return $this->setOption('zoomedArea.fill.color', $value);
    }

    public function zoomedAreaFillOpacity(float $value): static
    {
        return $this->setOption('zoomedArea.fill.opacity', $value);
    }

    public function zoomedAreaStrokeColor(string $value): static
    {
        return $this->setOption('zoomedArea.stroke.color', $value);
    }

    public function zoomedAreaStrokeOpacity(float $value): static
    {
        return $this->setOption('zoomedArea.stroke.opacity', $value);
    }

    public function zoomedAreaStrokeWidth(int $value): static
    {
        return $this->setOption('zoomedArea.stroke.width', $value);
    }
}