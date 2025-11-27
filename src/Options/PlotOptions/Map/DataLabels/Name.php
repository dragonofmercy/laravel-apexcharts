<?php

namespace ApexCharts\Options\PlotOptions\Map\DataLabels;

use ApexCharts\Abstracts\Options\PlotOptionsDataLabelsTypeAbstract;

class Name extends PlotOptionsDataLabelsTypeAbstract
{
    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }
}