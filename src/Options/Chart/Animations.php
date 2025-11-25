<?php

namespace ApexCharts\Options\Chart;

use ApexCharts\Abstracts\OptionsAbstract;

class Animations extends OptionsAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.chart.animations'));
        $this->setOption('enabled', true);

        parent::__construct($options);
    }

    public function speed(int $value): static
    {
        return $this->setOption('speed', $value);
    }

    public function animateGradually(bool|int $value): static
    {
        if(is_bool($value)){
            return $this->setOption('animateGradually.enabled', $value);
        } else {
            $this->setOption('animateGradually.enabled', true);
            return $this->setOption('animateGradually.delay', $value);
        }
    }

    public function dynamicAnimation(bool|int $value): static
    {
        if(is_bool($value)){
            return $this->setOption('dynamicAnimation.enabled', $value);
        } else {
            $this->setOption('dynamicAnimation.enabled', true);
            return $this->setOption('dynamicAnimation.speed', $value);
        }
    }
}