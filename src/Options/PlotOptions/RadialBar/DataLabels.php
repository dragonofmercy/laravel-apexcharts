<?php

namespace ApexCharts\Options\PlotOptions\RadialBar;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Options\PlotOptions\RadialBar\DataLabels\Name;
use ApexCharts\Options\PlotOptions\RadialBar\DataLabels\Total;
use ApexCharts\Options\PlotOptions\RadialBar\DataLabels\Value;

class DataLabels extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.plotOptions.radialBar.dataLabels'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function name(bool|Name $value): static
    {
        if(is_bool($value)){
            return $this->setOption('name.show', $value);
        }

        return $this->setOption('name', $value);
    }

    public function value(bool|Value $value): static
    {
        if(is_bool($value)){
            return $this->setOption('value.show', $value);
        }

        return $this->setOption('value', $value);
    }

    public function total(bool|Total $value): static
    {
        if(is_bool($value)){
            return $this->setOption('total.show', $value);
        }

        return $this->setOption('total', $value);
    }
}