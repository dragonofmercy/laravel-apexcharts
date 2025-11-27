<?php

namespace ApexCharts\Options\PlotOptions\RadialBar\Hollow;

use ApexCharts\Abstracts\Options\DropShadowAbstract;

class DropShadow extends DropShadowAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radialBar.hollow.dropShadow'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }
}