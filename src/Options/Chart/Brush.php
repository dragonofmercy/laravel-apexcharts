<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;
use ApexCharts\Builder;
use ApexCharts\Options\Chart;

class Brush extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.brush'));
        $this->setOption('enabled', true);
        parent::__construct($options);
    }

    public function autoScaleYaxis(bool $value = true): static
    {
        return $this->setOption('autoScaleYaxis', $value);
    }

    /**
     * Sets the target option with a given value, which can be a string, Builder, or Chart instance.
     *
     * @param string|Builder|Chart $target The value to set as the target. It can be a string,
     *                                     or an object of type Builder or Chart. If it is a Builder,
     *                                     its ID will be fetched. If it is a Chart, its 'id' option will be used.
     * @return static
     */
    public function target(string|Builder|Chart $target): static
    {
        if($target instanceof Builder){
            $target = $target->getId();
        } elseif($target instanceof Chart) {
            $target = $target->getOption('id');
        }

        return $this->setOption('target', $target);
    }
}