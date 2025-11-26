<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\Options\TitleAbstract;

class Subtitle extends TitleAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.subtitle'));
        parent::__construct($options);
    }
}