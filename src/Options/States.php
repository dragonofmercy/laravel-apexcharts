<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Enums\StatesType;

class States extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.states'));
        parent::__construct($options);
    }

    public function hoverFilter(StatesType $value): static
    {
        return $this->setOption('hover.filter.type', $value);
    }

    public function activeFilter(StatesType $value): static
    {
        return $this->setOption('active.filter.type', $value);
    }

    public function allowMultipleDataPointsSelection(bool $value = true): static
    {
        return $this->setOption('active.allowMultipleDataPointsSelection', $value);
    }
}