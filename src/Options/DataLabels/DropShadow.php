<?php

namespace ApexCharts\Options\DataLabels;

use ApexCharts\Abstracts\Options\DropShadowAbstract;

class DropShadow extends DropShadowAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.dataLabels.dropShadow'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function color(string $value): static
    {
        return $this->setOption('color', $value);
    }
}