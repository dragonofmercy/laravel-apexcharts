<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;

abstract class AxisAbstract extends OptionsAbstract
{
    public function min(int $value): static
    {
        return $this->setOption('min', $value);
    }

    public function max(int $value): static
    {
        return $this->setOption('max', $value);
    }

    public function tickAmount(int $value): static
    {
        return $this->setOption('tickAmount', $value);
    }

    public function floating(bool $value = true): static
    {
        return $this->setOption('floating', $value);
    }

    public function stepSize(float $value): static
    {
        return $this->setOption('stepSize', $value);
    }

    public function decimalsInFloat(int $value): static
    {
        return $this->setOption('decimalsInFloat', $value);
    }
}