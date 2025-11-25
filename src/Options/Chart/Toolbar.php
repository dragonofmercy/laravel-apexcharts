<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ChartToolbarAutoSelected;
use ApexCharts\Options\Chart\Toolbar\Export;
use ApexCharts\Options\Chart\Toolbar\Tools;

class Toolbar extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.toolbar'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function offsetX(float $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    public function offsetY(float $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    public function autoSelected(ChartToolbarAutoSelected $value): static
    {
        return $this->setOption('autoSelected', $value);
    }

    public function tools(Tools $value): static
    {
        return $this->setOption('tools', $value);
    }

    public function export(Export $value): static
    {
        return $this->setOption('export', $value);
    }
}