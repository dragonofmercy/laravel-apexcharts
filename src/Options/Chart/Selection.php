<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ChartSelectionType;

class Selection extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.selection'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    /**
     * Sets the type of chart selection.
     *
     * @param ChartSelectionType $value The type of chart selection to be set.
     * @return static
     */
    public function type(ChartSelectionType $value): static
    {
        return $this->setOption('type', $value);
    }

    /**
     * Sets the fill color option for the chart.
     *
     * @param string $value The fill color value to be applied.
     * @return static
     */
    public function fillColor(string $value): static
    {
        return $this->setOption('fill.color', $value);
    }

    /**
     * Sets the fill opacity value for the chart.
     *
     * @param float $value The opacity value to set, ranging from 0 (completely transparent) to 1 (completely opaque).
     * @return static
     */
    public function fillOpacity(float $value): static
    {
        return $this->setOption('fill.opacity', $value);
    }

    /**
     * Sets the stroke width option for the chart.
     *
     * @param int $value The width of the stroke in pixels.
     * @return static
     */
    public function strokeWidth(int $value): static
    {
        return $this->setOption('stroke.width', $value);
    }

    /**
     * Sets the stroke dash array value for the chart.
     *
     * @param int $value The dash array value defining the style of the stroke (e.g., solid or dashed lines).
     * @return static
     */
    public function strokeDashArray(int $value): static
    {
        return $this->setOption('stroke.dashArray', $value);
    }

    /**
     * Sets the stroke color option for the chart.
     *
     * @param string $value The color value to set for the stroke.
     * @return static
     */
    public function strokeColor(string $value): static
    {
        return $this->setOption('stroke.color', $value);
    }

    /**
     * Sets the stroke opacity for the chart.
     *
     * @param float $value The opacity level for the stroke. Accepts values between 0 (fully transparent) and 1 (fully opaque).
     * @return static
     */
    public function strokeOpacity(float $value): static
    {
        return $this->setOption('stroke.opacity', $value);
    }

    /**
     * Sets the minimum value for the x-axis.
     *
     * @param int $value The minimum value to be set for the x-axis.
     * @return static
     */
    public function xAxisMin(int $value): static
    {
        return $this->setOption('xaxis.min', $value);
    }

    /**
     * Sets the maximum value for the x-axis.
     *
     * @param int $value The maximum value to set for the x-axis.
     * @return static
     */
    public function xAxisMax(int $value): static
    {
        return $this->setOption('xaxis.max', $value);
    }

    /**
     * Sets the minimum value for the y-axis.
     *
     * @param int $value The minimum value to be set for the y-axis.
     * @return static
     */
    public function yAxisMin(int $value): static
    {
        return $this->setOption('yaxis.min', $value);
    }

    /**
     * Sets the maximum value for the Y-axis.
     *
     * @param int $value The maximum value to be set for the Y-axis.
     * @return static
     */
    public function yAxisMax(int $value): static
    {
        return $this->setOption('yaxis.max', $value);
    }
}