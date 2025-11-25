<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

abstract class AxisLabelsAbstract extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOption('enabled', true);
        parent::__construct($options);
    }
}