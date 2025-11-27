<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\ChartType;

class Bubble extends PlotOptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.bubble'));
        parent::__construct($options);
    }

    public function getType(): ChartType
    {
        return ChartType::Bubble;
    }

    public function zScalling(bool $value = true): static
    {
        return $this->setOption('zScaling', $value);
    }

    public function minBubbleRadius(float $value): static
    {
        return $this->setOption('minBubbleRadius', $value);
    }

    public function maxBubbleRadius(float $value): static
    {
        return $this->setOption('maxBubbleRadius', $value);
    }
}