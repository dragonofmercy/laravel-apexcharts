<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\StrokeCurve;
use ApexCharts\Enums\StrokeLineCap;

class Stroke extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.stroke'));
        parent::__construct($options);
    }

    /**
     * Sets the visibility option.
     *
     * @param bool $show Whether to enable or disable the visibility.
     * @return static
     */
    public function show(bool $show): static
    {
        return $this->setOption('show', $show);
    }

    /**
     * Sets the curve option.
     *
     * @param StrokeCurve|array $curve The curve value to set.
     * @return static
     */
    public function curve(StrokeCurve|array $curve): static
    {
        return $this->setOption('curve', $curve);
    }

    /**
     * Sets the line cap style for the stroke.
     *
     * @param StrokeLineCap $lineCap The line cap style to be applied.
     * @return static
     */
    public function lineCap(StrokeLineCap $lineCap): static
    {
        return $this->setOption('lineCap', $lineCap);
    }

    /**
     * Sets the colors option.
     *
     * @param array $colors An array of colors to be used.
     * @return static
     */
    public function colors(array $colors): static
    {
        return $this->setOption('colors', $colors);
    }

    /**
     * Sets the width option.
     *
     * @param int|array $width The width value to be set. Can be an integer or an array of values.
     * @return static
     */
    public function width(int|array $width): static
    {
        return $this->setOption('width', $width);
    }

    /**
     * Sets the dash array pattern for the stroke.
     *
     * @param int|array $dashArray The dash array pattern, which can be an integer for uniform dashes or an array for custom patterns.
     * @return static
     */
    public function dashArray(int|array $dashArray): static
    {
        return $this->setOption('dashArray', $dashArray);
    }
}