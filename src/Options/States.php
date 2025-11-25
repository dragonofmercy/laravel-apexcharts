<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\StatesType;

class States extends OptionsAbstract
{
    /**
     * Constructor.
     */
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.states'));
        parent::__construct($options);
    }

    /**
     * @param StatesType $value
     * @return static
     */
    public function hoverFilter(StatesType $value): static
    {
        return $this->setOption('hover.filter.type', $value);
    }

    /**
     * Sets the active filter type option.
     *
     * @param StatesType $value The state type value to set as the active filter.
     * @return static
     */
    public function activeFilter(StatesType $value): static
    {
        return $this->setOption('active.filter.type', $value);
    }

    /**
     *
     * @param bool $value Determines whether multiple data points selection is allowed.
     * @return static
     */
    public function allowMultipleDataPointsSelection(bool $value): static
    {
        return $this->setOption('active.allowMultipleDataPointsSelection', $value);
    }
}