<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\Options\AxisAbstract;
use ApexCharts\Options\YAxis\Labels;

class YAxis extends AxisAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.yaxis'));
        parent::__construct($options);
    }

    /**
     * Sets the labels option.
     *
     * @param bool|Labels $value Indicates whether to show labels or an instance of Labels for configuration.
     * @return static Returns the current instance with the
     */
    public function labels(bool|Labels $value)
    {
        if(is_bool($value)){
            return $this->setOption('labels.show', $value);
        } else {
            return $this->setOption('labels', $value);
        }
    }
}