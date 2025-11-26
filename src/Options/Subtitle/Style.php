<?php

namespace ApexCharts\Options\Subtitle;

use ApexCharts\Abstracts\Options\StyleAbstract;

class Style extends StyleAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.subtitle.style'));
        parent::__construct($options);
    }

    public function fontWeight(string|int $fontWeight): static
    {
        return $this->setOption('fontWeight', $fontWeight);
    }
}