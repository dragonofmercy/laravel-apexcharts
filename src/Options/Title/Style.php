<?php

namespace ApexCharts\Options\Title;

use ApexCharts\Abstracts\Options\StyleAbstract;

class Style extends StyleAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.title.style'));
        parent::__construct($options);
    }

    public function fontWeight(string|int $fontWeight): static
    {
        return $this->setOption('fontWeight', $fontWeight);
    }
}