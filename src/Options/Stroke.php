<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\StrokeCurve;
use ApexCharts\Enums\StrokeLineCap;

class Stroke extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.stroke'));
        parent::__construct($options);
    }

    public function show(bool $show): static
    {
        return $this->setOption('show', $show);
    }

    public function curve(StrokeCurve|array $curve): static
    {
        return $this->setOption('curve', $curve);
    }

    public function lineCap(StrokeLineCap $lineCap): static
    {
        return $this->setOption('lineCap', $lineCap);
    }

    public function colors(array $colors): static
    {
        return $this->setOption('colors', $colors);
    }

    public function width(float|array $width): static
    {
        return $this->setOption('width', $width);
    }

    public function dashArray(float|array $dashArray): static
    {
        return $this->setOption('dashArray', $dashArray);
    }
}