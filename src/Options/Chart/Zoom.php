<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ChartZoomType;

class Zoom extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.zoom'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    /**
     * @param ChartZoomType $type
     * @return static
     */
    public function type(ChartZoomType $type): static
    {
        return $this->setOption('type', $type);
    }

    /**
     * @param bool $value Indicates whether to automatically scale the Y-axis.
     * @return static
     */
    public function autoScaleYaxis(bool $value): static
    {
        return $this->setOption('autoScaleYaxis', $value);
    }

    /**
     * Sets whether zooming using the mouse wheel is allowed.
     *
     * @param bool $value Determines if mouse wheel zooming is enabled.
     * @return static
     */
    public function allowMouseWheelZoom(bool $value): static
    {
        return $this->setOption('allowMouseWheelZoom', $value);
    }

    /**
     * Sets the fill color of the zoomed area.
     *
     * @param string $value The color value to set for the zoomed area fill.
     * @return static
     */
    public function zoomedAreaFillColor(string $value): static
    {
        return $this->setOption('zoomedArea.fill.color', $value);
    }

    /**
     * Sets the opacity of the fill for the zoomed area.
     *
     * @param float $value The opacity value to set.
     * @return static
     */
    public function zoomedAreaFillOpacity(float $value): static
    {
        return $this->setOption('zoomedArea.fill.opacity', $value);
    }

    /**
     * Sets the stroke color of the zoomed area.
     *
     * @param string $value The stroke color value.
     * @return static
     */
    public function zoomedAreaStrokeColor(string $value): static
    {
        return $this->setOption('zoomedArea.stroke.color', $value);
    }

    /**
     * Sets the opacity of the stroke for the zoomed area.
     *
     * @param float $value The opacity value for the zoomed area's stroke.
     * @return static
     */
    public function zoomedAreaStrokeOpacity(float $value): static
    {
        return $this->setOption('zoomedArea.stroke.opacity', $value);
    }

    /**
     * Set the stroke width of the zoomed area.
     *
     * @param int $value The width of the stroke in pixels.
     * @return static
     */
    public function zoomedAreaStrokeWidth(int $value): static
    {
        return $this->setOption('zoomedArea.stroke.width', $value);
    }
}