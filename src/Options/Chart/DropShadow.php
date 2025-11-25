<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;

class DropShadow extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.dropShadow'));
        $this->setOption('enabled', true);

        parent::__construct($options);
    }

    /**
     * Sets the top offset for the shadow.
     *
     * @param int $value The top offset value.
     * @return static
     */
    public function top(int $value): static
    {
        return $this->setOption('top', $value);
    }

    /**
     * Sets the left offset for the shadow.
     *
     * @param int $value The left offset value.
     * @return static
     */
    public function left(int $value): static
    {
        return $this->setOption('left', $value);
    }

    /**
     * Sets the blur radius for the shadow.
     *
     * @param int $value The blur value.
     * @return static
     */
    public function blur(int $value): static
    {
        return $this->setOption('blur', $value);
    }

    /**
     * Sets the opacity of the shadow.
     *
     * @param float $value The opacity value (between 0 and 1).
     * @return static
     */
    public function opacity(float $value): static
    {
        return $this->setOption('opacity', $value);
    }

    /**
     * Sets the color of the shadow.
     *
     * @param string|array $value The color value (hex, rgb, etc.) or array of colors.
     * @return static
     */
    public function color(string|array $value): static
    {
        return $this->setOption('color', $value);
    }

    /**
     * Sets the series index(es) on which the dropshadow should be enabled.
     *
     * @param int|array $value The series index or array of indices.
     * @return static
     */
    public function enabledOnSeries(int|array $value): static
    {
        return $this->setOption('enabledOnSeries', is_int($value) ? [$value] : $value);
    }
}