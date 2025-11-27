<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\HorizontalAlign;
use ApexCharts\Enums\MarkerShape;
use ApexCharts\Enums\Orientation;
use ApexCharts\Enums\Position;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Str;

class Legend extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.legend'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function showForSingleSeries(bool $value = true): static
    {
        return $this->setOption('showForSingleSeries', $value);
    }

    public function showForNullSeries(bool $value = true): static
    {
        return $this->setOption('showForNullSeries', $value);
    }

    public function showForZeroSeries(bool $value = true): static
    {
        return $this->setOption('showForZeroSeries', $value);
    }

    public function position(Position $value): static
    {
        return $this->setOption('position', $value);
    }

    public function horizontalAlign(HorizontalAlign $value): static
    {
        return $this->setOption('horizontalAlign', $value);
    }

    public function floating(bool $value = true): static
    {
        return $this->setOption('floating', $value);
    }

    public function fontSize(string $fontSize): static
    {
        return $this->setOption('fontSize', $fontSize);
    }

    public function fontFamily(string $fontFamily): static
    {
        return $this->setOption('fontFamily', $fontFamily);
    }

    public function fontWeight(string|int $value): static
    {
        return $this->setOption('fontWeight', $value);
    }

    public function inverseOrder(bool $value = true): static
    {
        return $this->setOption('inverseOrder', $value);
    }

    public function width(float $value): static
    {
        return $this->setOption('width', $value);
    }

    public function height(float $value): static
    {
        return $this->setOption('height', $value);
    }

    public function formatter(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(seriesName, opts){ $value }";
        }

        return $this->setOption('formatter', new Raw($value));
    }

    public function tooltipHoverFormatter(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(seriesName, opts){ $value }";
        }

        return $this->setOption('tooltipHoverFormatter', new Raw($value));
    }

    public function customLegendItems(array $value): static
    {
        return $this->setOption('customLegendItems', $value);
    }

    public function clusterGroupedSeries(bool $value = true): static
    {
        return $this->setOption('clusterGroupedSeries', $value);
    }

    public function clusterGroupedSeriesOrientation(Orientation $value): static
    {
        return $this->setOption('clusterGroupedSeriesOrientation', $value);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function labelsColors(array $value): static
    {
        return $this->setOption('labels.colors', $value);
    }

    public function labelsUseSeriesColors(bool $value = true): static
    {
        return $this->setOption('labels.useSeriesColors', $value);
    }

    public function markersSize(float $value): static
    {
        return $this->setOption('markers.size', $value);
    }

    public function markersShape(array|MarkerShape $value): static
    {
        return $this->setOption('markers.shape', $value);
    }

    public function markersStrokeWidth(float $value): static
    {
        return $this->setOption('markers.strokeWidth', $value);
    }

    public function markersFillColors(array $value): static
    {
        return $this->setOption('markers.fillColors', $value);
    }

    public function markersCustomHtml(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "() => { $value }";
        }

        return $this->setOption('markers.customHTML', new Raw($value));
    }

    public function markersOnClick(string $value): static
    {
        if(!Str::startsWith('function(', $value)){
            $value = "function(chart, seriesIndex, opts){ $value }";
        }

        return $this->setOption('markers.onClick', new Raw($value));
    }

    public function markersOffsetX(float $value): static
    {
        return $this->setOption('markers.offsetX', $value);
    }

    public function markersOffsetY(float $value): static
    {
        return $this->setOption('markers.offsetY', $value);
    }

    public function itemMargin(?float $horizontal = null, ?float $vertical = null): static
    {
        if(null !== $horizontal){
            $this->setOption('itemMargin.horizontal', $horizontal);
        }

        if(null !== $vertical){
            $this->setOption('itemMargin.vertical', $vertical);
        }

        return $this;
    }

    public function toogleDataSeries(bool $value = true): static
    {
        return $this->setOption('onItemClick.toggleDataSeries', $value);
    }

    public function highlightDataSeries(bool $value = true): static
    {
        return $this->setOption('onItemHover.highlightDataSeries', $value);
    }
}