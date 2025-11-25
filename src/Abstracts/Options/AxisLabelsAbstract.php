<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

abstract class AxisLabelsAbstract extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function padding(float $value): static
    {
        return $this->setOption('padding', $value);
    }
}