<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\ChartType;
use ApexCharts\Options\PlotOptions\Pie\DataLabels\Name;
use ApexCharts\Options\PlotOptions\Pie\DataLabels\Total;
use ApexCharts\Options\PlotOptions\Pie\DataLabels\Value;

class Pie extends PlotOptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.pie'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::Pie;
    }

    public function startAngle(float $value): static
    {
        return $this->setOption('startAngle', $value);
    }

    public function endAngle(float $value): static
    {
        return $this->setOption('endAngle', $value);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function dataLabelsOffset(float $value): static
    {
        return $this->setOption('dataLabels.offset', $value);
    }

    public function dataLabelsMinAngleToShowLabel(float $value): static
    {
        return $this->setOption('dataLabels.minAngleToShowLabel', $value);
    }

    public function donutSize(string $value): static
    {
        return $this->setOption('donut.size', $value);
    }

    public function donutBackground(string $value): static
    {
        return $this->setOption('donut.background', $value);
    }

    public function dountLabelsName(bool|Name $value): static
    {
        $this->setOption('donut.labels.show', true);

        if(is_bool($value)){
            return $this->setOption('donut.labels.name.show', $value);
        }

        return $this->setOption('donut.labels.name', $value);
    }

    public function donutLabelsValue(bool|Value $value): static
    {
        $this->setOption('donut.labels.show', true);

        if(is_bool($value)){
            return $this->setOption('donut.labels.value.show', $value);
        }

        return $this->setOption('donut.labels.value', $value);
    }

    public function donutLabelsTotal(bool|Total $value): static
    {
        $this->setOption('donut.labels.show', true);

        if(is_bool($value)){
            return $this->setOption('donut.labels.total.show', $value);
        }

        return $this->setOption('donut.labels.total', $value);
    }
}