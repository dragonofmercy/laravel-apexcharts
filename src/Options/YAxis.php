<?php

namespace ApexCharts\Options;

use ApexCharts\Abstracts\Options\AxisAbstract;
use ApexCharts\Options\YAxis\AxisBorder;
use ApexCharts\Options\YAxis\AxisTicks;
use ApexCharts\Options\YAxis\Crosshairs;
use ApexCharts\Options\YAxis\Labels;
use ApexCharts\Options\YAxis\Tooltip;

class YAxis extends AxisAbstract
{
    public function __construct(array $options = [])
    {
        $this->setOptions(config('apexcharts.options.yaxis'));
        $this->setOption('show', true);
        parent::__construct($options);
    }

    public function showAlways(bool $value = true): static
    {
        return $this->setOption('showAlways', $value);
    }

    public function showFullNullSeries(bool $value = true): static
    {
        return $this->setOption('showFullNullSeries', $value);
    }

    public function seriesName(string|array $value): static
    {
        return $this->setOption('seriesName', $value);
    }

    public function opposite(bool $value = true): static
    {
        return $this->setOption('opposite', $value);
    }

    public function reversed(bool $value = true): static
    {
        return $this->setOption('reversed', $value);
    }

    public function logarithmic(bool $value = true): static
    {
        return $this->setOption('logarithmic', $value);
    }

    public function logBase(float $value): static
    {
        return $this->setOption('logBase', $value);
    }

    public function forceNiceScale(bool $value = true): static
    {
        return $this->setOption('forceNiceScale', $value);
    }

    public function labels(bool|Labels $value): static
    {
        if(is_bool($value)){
            return $this->setOption('labels.show', $value);
        } else {
            return $this->setOption('labels', $value);
        }
    }

    public function axisBorder(bool|AxisBorder $value): static
    {
        if(is_bool($value)){
            return $this->setOption('axisBorder.show', $value);
        } else {
            return $this->setOption('axisBorder', $value);
        }
    }

    public function axisTicks(bool|AxisTicks $value): static
    {
        if(is_bool($value)){
            return $this->setOption('axisTicks.show', $value);
        } else {
            return $this->setOption('axisTicks', $value);
        }
    }

    public function crosshairs(bool|Crosshairs $value): static
    {
        if(is_bool($value)){
            return $this->setOption('crosshairs.show', $value);
        } else {
            return $this->setOption('crosshairs', $value);
        }
    }

    public function tooltip(bool|Tooltip $value): static
    {
        if(is_bool($value)){
            return $this->setOption('tooltip.enabled', $value);
        } else {
            return $this->setOption('tooltip', $value);
        }
    }
}