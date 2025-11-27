<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\ChartType;
use ApexCharts\Enums\Layer;
use ApexCharts\Options\PlotOptions\RadialBar\DataLabels\Name;
use ApexCharts\Options\PlotOptions\RadialBar\DataLabels\Total;
use ApexCharts\Options\PlotOptions\RadialBar\DataLabels\Value;
use ApexCharts\Options\PlotOptions\RadialBar\BarLabels;
use ApexCharts\Options\PlotOptions\RadialBar\Hollow\DropShadow;
use ApexCharts\Options\PlotOptions\RadialBar\Track;

class RadialBar extends PlotOptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radialBar'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::RadialBar;
    }

    public function inverseOrder(bool $value = true): static
    {
        return $this->setOption('inverseOrder', $value);
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

    public function hollowMargin(float $value): static
    {
        return $this->setOption('hollow.margin', $value);
    }

    public function hollowSize(string $value): static
    {
        return $this->setOption('hollow.size', $value);
    }

    public function hollowBackground(string $value): static
    {
        return $this->setOption('hollow.background', $value);
    }

    public function hollowImage(string $value): static
    {
        return $this->setOption('hollow.image', $value);
    }

    public function hollowImageWidth(float $value): static
    {
        return $this->setOption('hollow.imageWidth', $value);
    }

    public function hollowImageHeight(float $value): static
    {
        return $this->setOption('hollow.imageHeight', $value);
    }

    public function hollowImageOffsetX(float $value): static
    {
        return $this->setOption('hollow.imageOffsetX', $value);
    }

    public function hollowImageOffsetY(float $value): static
    {
        return $this->setOption('hollow.imageOffsetY', $value);
    }

    public function hollowImageClipped(bool $value = true): static
    {
        return $this->setOption('hollow.imageClipped', $value);
    }

    public function hollowPosition(Layer $value): static
    {
        return $this->setOption('hollow.position', $value);
    }

    public function hollowDropShadow(DropShadow $value): static
    {
        return $this->setOption('hollow.dropShadow', $value);
    }

    public function track(bool|Track $value): static
    {
        if(is_bool($value)){
            return $this->setOption('track.show', $value);
        }

        return $this->setOption('track', $value);
    }

    public function barLabels(bool|BarLabels $value): static
    {
        if(is_bool($value)){
            return $this->setOption('barLabels.enabled', $value);
        }

        return $this->setOption('barLabels', $value);
    }

    public function dataLabelsName(bool|Name $value): static
    {
        $this->setOption('dataLabels.show', true);

        if(is_bool($value)){
            return $this->setOption('dataLabels.name.show', $value);
        }

        return $this->setOption('dataLabels.name', $value);
    }

    public function dataLabelsValue(bool|Value $value): static
    {
        $this->setOption('dataLabels.show', true);

        if(is_bool($value)){
            return $this->setOption('dataLabels.value.show', $value);
        }

        return $this->setOption('dataLabels.value', $value);
    }

    public function dataLabelsTotal(bool|Total $value): static
    {
        $this->setOption('dataLabels.show', true);

        if(is_bool($value)){
            return $this->setOption('dataLabels.total.show', $value);
        }

        return $this->setOption('dataLabels.total', $value);
    }
}