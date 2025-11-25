<?php

namespace ApexCharts\Options\Grid;

use ApexCharts\Abstracts\OptionsAbstract;

class Padding extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.grid.padding'));
        parent::__construct($options);
    }

    public function top(int $top): static
    {
        return $this->setOption('top', $top);
    }

    public function bottom(int $bottom): static
    {
        return $this->setOption('bottom', $bottom);
    }

    public function left(int $left): static
    {
        return $this->setOption('left', $left);
    }

    public function right(int $right): static
    {
        return $this->setOption('right', $right);
    }
}