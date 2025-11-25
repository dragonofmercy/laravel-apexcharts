<?php

namespace ApexCharts\Options\Tooltip;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\TooltipFixedPosition;

class Fixed extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.tooltip.fixed'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function position(TooltipFixedPosition $value)
    {
        return $this->setOption('position', $value);
    }

    public function offsetX(float $value)
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value)
    {
        return $this->setOption('offsetY', $value);
    }
}