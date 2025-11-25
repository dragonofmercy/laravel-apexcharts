<?php

namespace ApexCharts\Abstracts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\ChartType;

abstract class PlotOptionsAbstract extends OptionsAbstract
{
    /**
     * Retrieves the chart type.
     *
     * @return ChartType The type of the chart.
     */
    abstract public function getType(): ChartType;
}