<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\Align;
use ApexCharts\Enums\VerticalAlign;
use ApexCharts\Options\NoData\Style;

class NoData extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.noData'));
        parent::__construct($options);
    }

    public function text(string $value): static
    {
        return $this->setOption('text', $value);
    }

    public function align(Align $value): static
    {
        return $this->setOption('align', $value);
    }

    public function verticalAlign(VerticalAlign $value): static
    {
        return $this->setOption('verticalAlign', $value);
    }

    public function offsetX(float $offsetX): static
    {
        return $this->setOption('offsetX', $offsetX);
    }

    public function offsetY(float $offsetY): static
    {
        return $this->setOption('offsetY', $offsetY);
    }

    public function style(Style $style): static
    {
        return $this->setOption('style', $style);
    }
}