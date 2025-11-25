<?php

namespace ApexCharts\Options\PlotOptions;

use ApexCharts\Abstracts\Options\PlotOptionsAbstract;
use ApexCharts\Enums\ChartType;

class Bar extends PlotOptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.bar'));
        parent::__construct($options);
    }

    /**
     * @inheritDoc
     */
    public function getType(): ChartType
    {
        return ChartType::Bar;
    }

    /**
     * Sets the column width option.
     *
     * @param string|int $value The value to set for the column width.
     * @return static Returns the instance for method chaining.
     */
    public function columnWidth(string|int $value): static
    {
        return $this->setOption('columnWidth', $value);
    }
}