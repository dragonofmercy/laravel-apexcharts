<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

class Legend extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.legend'));
        parent::__construct($options);
    }
}