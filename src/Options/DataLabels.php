<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

class DataLabels extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.dataLabels'));
        parent::__construct($options);
    }
}