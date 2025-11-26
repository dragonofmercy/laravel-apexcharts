<?php

namespace ApexCharts\Options\YAxis;

use ApexCharts\Abstracts\OptionsAbstract;

class Tooltip extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.yaxis.tooltip'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }
}