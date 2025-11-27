<?php

namespace ApexCharts\Options\PlotOptions\RadialBar\Track;

use ApexCharts\Abstracts\Options\DropShadowAbstract;

class DropShadow extends DropShadowAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radialBar.track.dropShadow'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }
}