<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ChartToolbarAutoSelected;
use ApexCharts\Options\Chart\Toolbar\Export;
use ApexCharts\Options\Chart\Toolbar\Tools;

class Toolbar extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.toolbar'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    /**
     * Sets the offsetX option with the provided value.
     *
     * @param int $value The value for the offsetX option.
     * @return static
     */
    public function offsetX(int $value): static
    {
        return $this->setOption('offsetX', $value);
    }

    /**
     * Sets the offset on the Y-axis.
     *
     * @param int $value The value to set as the Y-axis offset.
     * @return static
     */
    public function offsetY(int $value): static
    {
        return $this->setOption('offsetY', $value);
    }

    /**
     * Sets the auto-selected option for the chart toolbar.
     *
     * @param ChartToolbarAutoSelected $value The auto-selected value to set.
     * @return static
     */
    public function autoSelected(ChartToolbarAutoSelected $value): static
    {
        return $this->setOption('autoSelected', $value);
    }

    /**
     * Sets the tools option.
     *
     * @param Tools $value The tools instance to set.
     * @return static
     */
    public function tools(Tools $value): static
    {
        return $this->setOption('tools', $value);
    }

    /**
     * Sets the export option for the current instance.
     *
     * @param Export $value The export instance to be set.
     * @return static
     */
    public function export(Export $value): static
    {
        return $this->setOption('export', $value);
    }
}