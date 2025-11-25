<?php

namespace ApexCharts\Options\YAxis;

use ApexCharts\Abstracts\Options\AxisLabelsAbstract;

class Labels extends AxisLabelsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.yaxis.labels'));
        parent::__construct($options);
    }

    /**
     * Sets the padding option.
     *
     * @param int $value The padding value to set.
     * @return static The current instance for method chaining.
     */
    public function padding(int $value): static
    {
        return $this->setOption('padding', $value);
    }
}