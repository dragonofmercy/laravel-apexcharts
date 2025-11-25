<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

class Base extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options'));
        parent::__construct($options);
    }
}