<?php

namespace ApexCharts\Options\XAxis;

use ApexCharts\Abstracts\Options\AxisLabelsAbstract;

class Labels extends AxisLabelsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis.labels'));
        parent::__construct($options);
    }
}