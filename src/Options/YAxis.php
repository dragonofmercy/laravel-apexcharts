<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\Options\AxisAbstract;
use ApexCharts\Options\YAxis\Labels;

class YAxis extends AxisAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.yaxis'));
        parent::__construct($options);
    }

    public function labels(bool|Labels $value): static
    {
        if(is_bool($value)){
            return $this->setOption('labels.show', $value);
        } else {
            return $this->setOption('labels', $value);
        }
    }
}