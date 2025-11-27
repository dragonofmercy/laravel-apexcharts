<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\BorderRadiusApplication;
use ApexCharts\Enums\BorderRadiusWhenStacked;
use ApexCharts\Enums\ChartType;
use ApexCharts\Enums\Orientation;
use ApexCharts\Enums\Position;
use ApexCharts\Options\PlotOptions\Bar\ColorRange;
use ApexCharts\Options\PlotOptions\Bar\DataLabels\Total;

class Bar extends PlotOptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.bar'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::Bar;
    }

    public function horizontal(bool $value = true): static
    {
        return $this->setOption('horizontal', $value);
    }

    public function borderRadius(int $value): static
    {
        return $this->setOption('borderRadius', $value);
    }

    public function borderRadiusApplication(BorderRadiusApplication $value): static
    {
        return $this->setOption('borderRadiusApplication', $value);
    }

    public function borderRadiusWhenStacked(BorderRadiusWhenStacked $value): static
    {
        return $this->setOption('borderRadiusWhenStacked', $value);
    }

    public function columnWidth(string|float $value): static
    {
        return $this->setOption('columnWidth', $value);
    }

    public function barHeight(string|float $value): static
    {
        return $this->setOption('barHeight', $value);
    }

    public function distributed(bool $value = true): static
    {
        return $this->setOption('distributed', $value);
    }

    public function rangeBarOverlap(bool $value = true): static
    {
        return $this->setOption('rangeBarOverlap', $value);
    }

    public function rangeBarGroupRows(bool $value = true): static
    {
        return $this->setOption('rangeBarGroupRows', $value);
    }

    public function hideZeroBarsWhenGrouped(bool $value = true): static
    {
        return $this->setOption('hideZeroBarsWhenGrouped', $value);
    }

    public function isDumbbell(bool $value = true): static
    {
        return $this->setOption('isDumbbell', $value);
    }

    public function dumbbellColors(array $value): static
    {
        return $this->setOption('dumbbellColors', $value);
    }

    public function isFunnel(bool $value = true): static
    {
        return $this->setOption('isFunnel', $value);
    }

    public function isFunnel3d(bool $value = true): static
    {
        return $this->setOption('isFunnel3d', $value);
    }

    /**
     * @param array<ColorRange|array> $value
     * @return $this
     */
    public function colorsRanges(array $value): static
    {
        foreach($value as $v){
            if($value instanceof ColorRange){
                $this->setOption('colors.ranges', $v, true);
            } elseif(is_array($v)) {
                $this->setOption('colors.ranges', ColorRange::make($v), true);
            }
        }

        return $this;
    }

    public function backgroundBarColors(array $value): static
    {
        return $this->setOption('colors.backgroundBarColors', $value);
    }

    public function backgroundBarOpacity(float $value): static
    {
        return $this->setOption('colors.backgroundBarOpacity', $value);
    }

    public function backgroundBarRadius(int $value): static
    {
        return $this->setOption('colors.backgroundBarRadius', $value);
    }

    public function dataLabelsPosition(Position $value): static
    {
        return $this->setOption('dataLabels.position', $value);
    }

    public function dataLabelsMaxItems(int $value): static
    {
        return $this->setOption('dataLabels.maxItems', $value);
    }

    public function dataLabelsHideOverflowingLabels(bool $value = true): static
    {
        return $this->setOption('dataLabels.hideOverflowingLabels', $value);
    }

    public function dataLabelsOrientation(Orientation $value): static
    {
        return $this->setOption('dataLabels.orientation', $value);
    }

    public function dataLabelsTotal(bool|Total $value): static
    {
        if(is_bool($value)){
            return $this->setOption('dataLabels.total.enabled', $value);
        }

        return $this->setOption('dataLabels.total', $value);
    }
}