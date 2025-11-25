<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\Align;

class Title extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.title'));
        parent::__construct($options);
    }

    public function text(string $text): static
    {
        return $this->setOption('text', $text);
    }

    public function align(Align $align): static
    {
        return $this->setOption('align', $align);
    }

    public function margin(int $margin): static
    {
        return $this->setOption('margin', $margin);
    }

    public function offsetX(float $offsetX): static
    {
        return $this->setOption('offsetX', $offsetX);
    }

    public function offsetY(float $offsetY): static
    {
        return $this->setOption('offsetY', $offsetY);
    }

    public function floating(bool $floating): static
    {
        return $this->setOption('floating', $floating);
    }

    public function style(Style $style): static
    {
        return $this->setOption('style', $style);
    }
}