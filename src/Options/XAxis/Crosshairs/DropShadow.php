<?php

namespace ApexCharts\Options\XAxis\Crosshairs;

use ApexCharts\Abstracts\Options\DropShadowAbstract;

class DropShadow extends DropShadowAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis.crosshairs.dropShadow'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }
}