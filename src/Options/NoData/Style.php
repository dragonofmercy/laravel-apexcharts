<?php

namespace ApexCharts\Options\NoData;

use ApexCharts\Abstracts\Options\StyleAbstract;

class Style extends StyleAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.noData.style'));
        parent::__construct($options);
    }
}