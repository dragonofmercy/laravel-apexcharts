<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\Options\AxisAbstract;
use ApexCharts\Enums\XAxisType;
use ApexCharts\Options\XAxis\Labels;

class XAxis extends AxisAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.xaxis'));
        parent::__construct($options);
    }

    public function type(XAxisType $type): static
    {
        return $this->setOption('type', $type);
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