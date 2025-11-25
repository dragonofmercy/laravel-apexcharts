<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

abstract class AxisAbstract extends OptionsAbstract
{
    public function axisBorder(bool $value): static
    {
        return $this->setOption('axisBorder.show', $value);
    }
}