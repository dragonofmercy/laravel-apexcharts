<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\Options\TitleAbstract;

class Title extends TitleAbstract
{
    public function __construct(array $options = [])
    {
        parent::__construct($options);

        $this->setOptions(config('apexcharts.options.title'));
    }
}